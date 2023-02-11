<?php
/** @noinspection ALL */


namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

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
        $data = Courses::all();
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.get"), 'data' => $data]);
        }
        return view('courses.index', compact('data'));
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
        return view('courses.create');
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
        //see if (teacher and approved) or admin
        if(!($user->is_teacher && $user->is_approved) && !$user->is_admin) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.unauthorized")], 401);
            }
            return redirect()->back()->with('error', __("controller.error.unauthorized"));
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);


        if ($validator->fails()) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.validation"), 'errors' => $validator->errors()], 400);
            }
            return redirect()->back()->withErrors($validator->errors());
        }
        $validated = $validator->validated();
        $validated['author_id'] = $user->id;
        $data = Courses::create($validated);
        if($request->expectsJson()) {
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
    public function show(Request $request, CoursesController $courses)
    {
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.get"), 'data' => $data]);
        }
        return view("courses.show", compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(CoursesController $courses, Request $request)
    {
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.error.not_found")], 404);
        }
        return view('courses.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoursesController $courses)
    {
        $user = Auth::user();
        //see if (teacher and approved) or admin
        if(!($user->is_teacher && $user->is_approved && $user->id == $courses->author_id) && !$user->is_admin) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.unauthorized")], 401);
            }
            return redirect()->back()->with('error', __("controller.error.unauthorized"));
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

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
    public function destroy(Request $request, CoursesController $courses)
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
