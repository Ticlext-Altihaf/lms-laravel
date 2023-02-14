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
            $data = Lessons::where('course_id', $course_id)->paginate();
            //check length of data
            if(sizeof($data) == 0) {
                $data = null;
            }
        } else {
            $data = Lessons::paginate();
        }
        if(!$data) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.not_found")], 404);
            }
            return view('lessons.index', compact('data'));
        }
        $data = $data->toArray();
        $data['message'] =  __("controller.success.get", ["data" => trans_choice("data.lessons", sizeof($data))]);
        if($request->expectsJson()) {
            return response()->json($data, 200);
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
         *
         * create table lms.lessons
         * (
         * id           bigint unsigned auto_increment
         * primary key,
         * order_no     int             not null,
         * name         varchar(255)    not null,
         * description  varchar(255)    not null,
         * image        int             null,
         * section      varchar(255)    null,
         * chat_room_id bigint unsigned null,
         * course_id    bigint unsigned null,
         * created_at   timestamp       null,
         * updated_at   timestamp       null,
         * constraint lessons_chat_room_id_foreign
         * foreign key (chat_room_id) references lms.chat_rooms (id),
         * constraint lessons_course_id_foreign
         * foreign key (course_id) references lms.courses (id)
         * )
         * collate = utf8mb4_unicode_ci;
         */
        $data = $request->validate([
            'name' => 'required',
            'section' => 'required',
            'course_id' => 'required',
        ]);
        $course = Courses::find($data['course_id']);
        if(!$course) {
            if($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.data_not_found", ['data' => trans_choice("data.courses", 1)])], 404);
            }
            return redirect()->back()->with('error', __("controller.error.data_not_found", ['data' => trans_choice("data.courses", 1)]));
        }
        //check if valid author
        if ($course->author_id != auth()->user()->id && !auth()->user()->is_admin) {
            if ($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.not_authorized")], 403);
            }
            return redirect()->back()->with('error', __("controller.error.not_authorized"));
        }
        if (empty($data['order_no'])) {
            //count all lesson
            $data['order_no'] = Lessons::where('course_id', $data['course_id'])->count() + 1;
        }
        $lesson = Lessons::create($data);
        if (empty($lesson['chat_room_id'])) {
            $chat_room = $this->makeChatRoom($lesson);
            $lesson->chat_room_id = $chat_room->id;
            $lesson->save();
        }
        if ($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.create", ['data' => trans_choice("data.lessons", 1)]), 'data' => $lesson]);
        }
        return redirect()->route('lessons.index')->with('success', __("controller.success.create", ['data' => trans_choice("data.lessons", 1)]));
    }

    protected function makeChatRoom(Lessons $lesson)
    {
        $chat_room = $lesson->chat_room()->create([
            'name' => $lesson->name,
            'description' => $lesson->description,
            'image' => $lesson->image,
            'type' => 'lesson',
            'type_id' => $lesson->id,
        ]);
        return $chat_room;
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Lessons $lessons
     * @return \Illuminate\Http\Response
     */
    public function show(Lessons $lesson, Request $request)
    {
        $lesson = $lesson->load('course', 'quizzes', 'chat_room', 'quizzes.choices', 'lessonContents')->loadCount('quizzes', 'lessonContents');
        //merge lesson contents with quizzes
        $contents = array();
        foreach ($lesson->quizzes as $quiz) {
            $qa = $quiz->toArray();
            $qa['type'] = 'quiz';
            $contents[] = $qa;
        }
        foreach ($lesson->lessonContents as $content) {
            $qa = $content->toArray();
            //check if start with https://www.youtube.com/watch?v=
            if (substr($qa['text'], 0, 32) === "https://www.youtube.com/watch?v=") {
                $qa['type'] = 'video';
                $qa['video_id'] = substr($qa['text'], 32);
                //ensure no extra characters
                if (strpos($qa['video_id'], '&') !== false) {
                    $qa['video_id'] = substr($qa['video_id'], 0, strpos($qa['video_id'], '&'));
                }
                //check if start with https we gonna assume its an attachment
            } else if (substr($qa['text'], 0, 5) === "https") {
                $qa['type'] = 'attachment';
            } else {
                $qa['type'] = 'content';
            }
            $contents[] = $qa;
        }
        //sort by order_no
        usort($contents, function ($a, $b) {
            return $a['order_no'] <=> $b['order_no'];
        });

        $lesson = $lesson->toArray();
        $lesson['contents'] = $contents;
        unset($lesson['quizzes']);
        unset($lesson['lesson_contents']);
        if ($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.get", ['data' => trans_choice("data.lessons", 1)]), 'data' => $lesson]);
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
