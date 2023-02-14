<?php
/** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public static $validation_rule = [
        'name' => 'required|string|max:255',
        'question' => 'required|string|max:255',
        'is_multiple_choice' => 'required|boolean',
        'is_true_false' => 'required|boolean',
        'is_fill_in_the_blank' => 'required|boolean',
        'answer' => 'required|string|max:255',
        'lesson_id' => 'required|integer',
    ];

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * create table lms.quizzes
         * (
         * id                   bigint unsigned auto_increment
         * primary key,
         * order_no             int                  not null,
         * name                 varchar(255)         not null,
         * question             varchar(255)         not null,
         * is_multiple_choice   tinyint(1) default 0 not null,
         * is_true_false        tinyint(1) default 0 not null,
         * is_fill_in_the_blank tinyint(1) default 0 not null,
         * answer               varchar(255)         null,
         * lesson_id            bigint unsigned      null,
         * created_at           timestamp            null,
         * updated_at           timestamp            null,
         * constraint quizzes_lesson_id_foreign
         * foreign key (lesson_id) references lms.lessons (id)
         * )
         * collate = utf8mb4_unicode_ci;
         */
        $data = $request->validate(self::$validation_rule);

        $owner_result = $this->is_the_owner($request, $quiz);
        if ($owner_result !== true) {
            return $owner_result;
        }
        $quiz = Quiz::create($data);
        if ($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.create", ['data' => trans_choice("data.quiz", 1)]), 'data' => $lesson]);
        }
        return redirect()->route('quiz.index')->with('success', __("controller.success.create", ['data' => trans_choice("data.quiz", 1)]));
    }

    protected function is_the_owner(Request $request, Quiz $quiz)
    {
        $lesson = $quiz->lesson();
        if (!$lesson) {
            if ($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.data_not_found", ['data' => trans_choice("data.lessons", 1)])], 404);
            }
            return redirect()->back()->with('error', __("controller.error.data_not_found", ['data' => trans_choice("data.lessons", 1)]));
        }
        $course = $lesson->course();
        //check if valid author
        if ($course->author_id != auth()->user()->id) {
            if ($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.not_authorized")], 403);
            }
            return redirect()->back()->with('error', __("controller.error.not_authorized"));
        }
        return true;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => __("controller.error.not_found")], 404);
        }
        return view('quiz.create');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz, Request $request)
    {

        if ($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.get", ['data' => trans_choice("data.quiz", 1)]), 'data' => $quiz]);
        }
        return view('quiz.show', compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Quiz $quiz)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => __("controller.error.not_found")], 404);
        }
        return view('quiz.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        $data = $request->validate(self::$validation_rule);
        $owner_result = $this->is_the_owner($request, $quiz);
        if ($owner_result !== true) {
            return $owner_result;
        }
        $quiz->update($data);
        if ($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.update", ['data' => trans_choice("data.quiz", 1)]), 'data' => $quiz]);
        }
        return redirect()->route('quiz.index')->with('success', __("controller.success.update", ['data' => trans_choice("data.quiz", 1)]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Quiz $quiz)
    {
        $course = $quiz->course();
        //check if valid author
        if ($course->author_id != auth()->user()->id) {
            if ($request->expectsJson()) {
                return response()->json(['message' => __("controller.error.not_authorized")], 403);
            }
            return redirect()->back()->with('error', __("controller.error.not_authorized"));
        }
        $result = $quiz->delete();
        if ($request->expectsJson()) {
            return response()->json(['message' => __("controller.success.deleted", ['data' => trans_choice("data.quiz", 1)]), 'data' => $result]);
        }
        return redirect()->back()->with('success', __("controller.success.deleted", ['data' => trans_choice("data.quiz", 1)]));
    }
}
