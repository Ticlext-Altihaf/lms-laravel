<?php
/** @noinspection ALL */
namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lessons;
use Illuminate\Http\Request;

class LessonsController extends Controller
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
        $course_id = $request->get('course');
        $data = null;
        if($course_id) {
            $data = Lessons::where('course_id', $course_id)->get();
            //check length of data
            if(sizeof($data) == 0) {
                $data = null;
            }
        } else {
            $data = Lessons::all();
        }
        if(!$data) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.not_found")], 404);
            }
            return view('lessons.index', compact('data'));
        }
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.get", ["data" => trans_choice("data.lessons", sizeof($data))]), 'data' => $data]);
        }
        return view('lessons.index', compact('data'));
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
        return view('lessons.create');
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
         * create table lms.lessons
        (
        id              bigint unsigned auto_increment
        primary key,
        name            varchar(255)    not null,
        description     varchar(255)    not null,
        video_url       varchar(255)    null,
        attachment_path varchar(255)    null,
        section         varchar(255)    null,
        chat_room_id    bigint unsigned null,
        course_id       bigint unsigned null,
        created_at      timestamp       null,
        updated_at      timestamp       null,
        constraint lessons_chat_room_id_foreign
        foreign key (chat_room_id) references lms.chat_rooms (id),
        constraint lessons_course_id_foreign
        foreign key (course_id) references lms.courses (id)
        )
        collate = utf8mb4_unicode_ci;
         */
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'course_id' => 'required',
        ]);
        $course = Courses::find($data['course_id']);
        if(!$course) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.data_not_found", ['data' => trans_choice("data.courses", 1)])], 404);
            }
            return redirect()->back()->with('error', __("controller.error.data_not_found", ['data' =>  trans_choice("data.courses", 1)]));
        }
        //check if valid author
        if($course->author_id != auth()->user()->id) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.not_authorized")], 403);
            }
            return redirect()->back()->with('error', __("controller.error.not_authorized"));
        }
        $lesson = Lessons::create($data);
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.create", ['data' => trans_choice("data.lessons", 1)]), 'data' => $lesson]);
        }
        return redirect()->route('lessons.index')->with('success', __("controller.success.create", ['data' => trans_choice("data.lessons", 1)]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Lessons $lessons)
    {
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.get"), 'data' => $lessons]);
        }
        return view('lessons.show', compact('lessons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Lessons $lessons)
    {
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.error.not_found")], 404);
        }
        return view('lessons.edit', compact('lessons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lessons $lessons)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'course_id' => 'required',
        ]);
        $course = $lessons->course();
        if(!$course) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.data_not_found", ['data' => trans_choice("data.courses", 1)])], 404);
            }
            return redirect()->back()->with('error', __("controller.error.data_not_found", ['data' => trans_choice("data.courses", 1)]));
        }
        //check if valid author
        if($course->author_id != auth()->user()->id) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.not_authorized")], 403);
            }
            return redirect()->back()->with('error', __("controller.error.not_authorized"));
        }
        $lessons->update($data);
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.update", ['data' => trans_choice("data.lessons", 1)]), 'data' => $lessons]);
        }
        return redirect()->route('lessons.index')->with('success', __("controller.success.update", ['data' => trans_choice("data.lessons", 1)]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Lessons $lessons){
        $course = $lessons->course();
        //check if valid author
        if($course->author_id != auth()->user()->id) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.not_authorized")], 403);
            }
            return redirect()->back()->with('error', __("controller.error.not_authorized"));
        }
        $result = $lessons->delete();
        if($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.deleted", ['data' => trans_choice("data.lessons", 1)]), 'data' => $result]);
        }
        return redirect()->back()->with('success', __("controller.success.deleted", ['data' => trans_choice("data.lessons", 1)]));
    }
}
