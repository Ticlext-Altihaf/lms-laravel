<?php
/** @noinspection ALL */


namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CoursesController extends Controller
{

    public static array $rules = [
        'name' => 'required',
        'description' => 'required',
        'categories' => 'array',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = Courses::with(['author', 'categories']);
        if ($request->input('author_id')) {
            $data = $data->where('author_id', $request->input('author_id'));
        }
        if ($request->input('category')) {
            if ($request->input('category') != 'all') {
                $data = $data->whereHas('categories', function ($query) use ($request) {
                    $query->where('categories.id', $request->input('category'));
                });
            }
        }
        if ($request->input('search')) {
            //check if empty string
            if (trim($request->input('search')) != '') {
                $data = $data->where('name', 'like', '%' . $request->input('search') . '%');
            }
        }
        $data = $data->paginate()->toArray();
        foreach ($data['data'] as $key => $course) {
            if (empty($data['data'][$key]['categories'])) {
                $data['data'][$key]['categories'] = [];
            }
        }
        $data['message'] = __("controller.success.get", ["data" => trans_choice("data.courses", 2)]);
        if ($request->expectsJson()) {
            return response()->json($data, 200);
        }
        $data['available_categories'] = \App\Models\Categories::all()->toArray();
        $data['params'] = $request->all();
        if (!$request->input('category')) {
            $data['params']['category'] = 'all';
        }
        if (!$request->input('search')) {
            $data['params']['search'] = '';
        }
        return view('pages.courses.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.error.not_found")], 404);
        }
        return view('pages.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * create table courses
        (
        id          bigint unsigned auto_increment
        primary key,
        name        varchar(255)    not null,
        description varchar(255)    not null,
        image       varchar(255)    not null,
        author_id   bigint unsigned not null,
        created_at  timestamp       null,
        updated_at  timestamp       null,
        constraint courses_author_id_foreign
        foreign key (author_id) references users (id)
        )
         */
        $user = Auth::user();
        //see if isnt teacher or admin
        if (!($user->is_teacher) && !$user->is_admin) {
            if ($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.unauthorized")], 401);
            }
            return redirect()->back()->with('error', __("controller.error.unauthorized"));
        }
        $validator = Validator::make($request->all(), self::$rules);
        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.validation"), 'errors' => $validator->errors()], 400);
            }
            return redirect()->back()->withErrors($validator->errors());
        }
        $validated = $validator->validated();
        if (isset($validated['image'])) {
            $disk = Storage::disk('public');
            $name = $validated['image']->hashName();
            $path = $validated['image']->storeAs('images', $name, 'public');
            $validated['image'] = $path;
            //make public
            $disk->setVisibility($path, 'public');
        }
        $validated['author_id'] = $user->id;
        $data = Courses::create($validated);
        if ($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.created"), 'data' => $data], 201);
        }
        return redirect()->back()->with('success', __("controller.success.created"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Courses $course)
    {
        $data = $course->load(['author', 'categories', 'lessons'])->loadCount(['lessons']);
        $data = $data->toArray();
        unset($data['lessons']);
        
        if ($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.get", ['data' => trans_choice("data.courses", 1)]), 'data' => $data]);
        }
        return view("pages.courses.show", compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses, Request $request)
    {
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.error.not_found")], 404);
        }
        return view('pages.courses.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $courses)
    {
        $user = Auth::user();
        //see if (teacher and approved) or admin
        if(!($user->is_teacher && $user->is_approved && $user->id == $courses->author_id) && !$user->is_admin) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.unauthorized")], 401);
            }
            return redirect()->back()->with('error', __("controller.error.unauthorized"));
        }

        $validator = Validator::make($request->all(), self::$rules);

        if ($validator->fails()) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.validation"), 'errors' => $validator->errors()], 400);
            }
            return redirect()->back()->withErrors($validator->errors());
        }

        $validated = $validator->validated();
        $data = $courses->update($validated);
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.updated"), 'data' => $data]);
        }
        return redirect()->back()->with('success', __("controller.success.updated"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Courses $courses)
    {
        $user = Auth::user();
        //see if (teacher and approved) or admin
        if(!($user->is_teacher && $user->is_approved && $user->id == $courses->author_id) && !$user->is_admin) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.unauthorized")], 401);
            }
            return redirect()->back()->with('error', __("controller.error.unauthorized"));
        }
        $result = $courses->delete();
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.deleted"), 'data' => $result]);
        }
        return redirect()->back()->with('success', __("controller.success.deleted"));
    }
}
