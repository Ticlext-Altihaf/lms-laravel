<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {

        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->foreignId("author_id")->constrained("users");
            $table->timestamps();
        });

        Schema::create("categories", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->string("image")->nullable();
            $table->bigInteger("parent_id")->nullable();
            $table->timestamps();
        });

        Schema::create("course_categories", function (Blueprint $table) {
            $table->foreignId("courses_id")->constrained("courses");
            $table->foreignId("categories_id")->constrained("categories");
        });

        Schema::create("user_course", function (Blueprint $table) {
            $table->foreignId("user_id")->constrained("users");
            $table->foreignId("course_id")->constrained("courses");
            $table->boolean("is_completed")->default(false);
            $table->boolean("is_favorite")->default(false);
            $table->timestamps();
        });

        Schema::create('chat_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();//nullable if direct
            $table->string('description')->nullable();
            $table->string('image')->nullable();//nullable if direct
            $table->boolean('is_public')->default(false);
            $table->boolean('is_disabled')->default(false);
            $table->boolean('is_direct')->default(false);
            $table->timestamps();
        });

        Schema::create('chat_room_user', function (Blueprint $table) {
            $table->foreignId('chat_room_id')->constrained('chat_rooms');
            $table->foreignId('user_id')->constrained('users');
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('attachment_path')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('chat_room_id')->nullable()->constrained('chat_rooms');
            $table->foreignId('message_id')->nullable()->constrained('messages');//CHECK FOR CIRCULAR REFERENCE
            $table->timestamps();
        });

        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->integer("order_no");//order of content
            $table->string('name');
            $table->string('description')->nullable();//reserved
            $table->string("image")->nullable();
            $table->string("section")->nullable();
            $table->foreignId('chat_room_id')->nullable()->constrained('chat_rooms');
            $table->foreignId('course_id')->nullable()->constrained('courses');
            $table->timestamps();
        });


        Schema::create('lesson_contents', function (Blueprint $table) {
            $table->id();
            $table->integer("order_no");//order of content
            $table->string('name');
            $table->text('text');
            $table->foreignId('lesson_id')->constrained('lessons');
            $table->timestamps();
        });
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->integer("order_no");//order of content
            $table->string('name');
            $table->string('text');
            $table->boolean('is_multiple_choice')->default(false);
            $table->boolean('is_true_false')->default(false);
            $table->boolean('is_fill_in_the_blank')->default(false);
            $table->string('answer')->nullable();//if multiple choice only
            $table->foreignId('lesson_id')->constrained('lessons');
            $table->timestamps();
        });
        Schema::create("lesson_content_progress", function (Blueprint $table) {
            $table->foreignId("lesson_content_id")->constrained("lesson_contents");
            $table->foreignId("user_id")->constrained("users");
            $table->timestamps();
        });
        Schema::create("progress_quiz", function (Blueprint $table) {
            $table->foreignId("quiz_id")->constrained("quizzes");
            $table->foreignId("user_id")->constrained("users");
            $table->string("answer")->nullable();
            $table->timestamps();
        });

        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->boolean('is_correct')->default(false);
            //if there is multiple correct answers, then backend should inform it
            //assure there is least one correct answer
            $table->foreignId('quiz_id')->nullable()->constrained('quizzes');
            $table->timestamps();
        });

        Schema::create('progress_lesson', function (Blueprint $table) {
            $table->foreignId('lesson_id')->constrained('lessons');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('chat_rooms');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('quizzes');
        Schema::dropIfExists('choices');
        Schema::dropIfExists('progress');
    }
};
