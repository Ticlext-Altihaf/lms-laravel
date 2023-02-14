<?php
/** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\LessonContent;
use App\Models\Lessons;
use App\Models\Quiz;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lesson_id = $request->get('lesson_id');
        if ($lesson_id) {
            $quizzes = Quiz::where('lesson_id', $lesson_id)->get();
            $lessons_content = LessonContent::where('lesson_id', $lesson_id)->get();
        } else {
            $quizzes = Quiz::all();
            $lessons_content = LessonContent::all();
        }
        $quizzes = $quizzes->toArray();
        $lessons_content = $lessons_content->toArray();
        $contents = [];
        foreach ($quizzes as $quiz) {
            $contents[] = $quiz;
        }
        foreach ($lessons_content as $lesson_content) {
            $contents[] = $lesson_content;
        }
        //sort by order_no
        usort($contents, function ($a, $b) {
            return $a->order_no - $b->order_no;
        });
        if ($request->expectsJson()) {
            return response()->json(['data' => $contents, 'message' => __('controller.success.get')], 200);
        }
        return view('contents.index', compact('contents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'text' => 'required',
            'lesson_id' => 'required',
        ]);
        $lesson = Lessons::find($data['lesson_id']);
        if (!$lesson) {
            if ($request->expectsJson()) {
                return response()->json(['message' => __('controller.error.not_found')], 404);
            }
            return redirect()->back()->with('error', __('controller.error.not_found'));
        }
        $course = Courses::find($lesson->course_id);
        $author = $course->author()->first();
        if ($author->id != auth()->user()->id && !auth()->user()->is_admin) {
            if ($request->expectsJson()) {
                return response()->json(['message' => __('controller.error.not_authorized')], 403);
            }
            return redirect()->back()->with('error', __('controller.error.not_authorized'));
        }
        $data['order_no'] = $lesson->contents()->count() + 1;
        if ($data['type'] == 'quiz') {
            $data = Quiz::create($data);
        } else {
            if($data['type'] == "youtube"){
                //validate text starts with https://www.youtube.com/watch?v= or https://youtu.be/
                $regex = "/^(https:\/\/www\.youtube\.com\/watch\?v=|https:\/\/youtu\.be\/)([a-zA-Z0-9_-]{11})$/";
                if(!preg_match($regex, $data['text'])){
                    if ($request->expectsJson()) {
                        return response()->json(['message' => __('controller.error.invalid_youtube_url')], 400);
                    }
                    return redirect()->back()->with('error', __('controller.error.invalid_youtube_url'));
                }
            }
            $data = LessonContent::create($data);
        }
        $data->save();
        if ($request->expectsJson()) {
            return response()->json(['data' => $data, 'message' => __('controller.success.create')], 201);
        }
        return redirect()->back()->with('success', __('controller.success.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
