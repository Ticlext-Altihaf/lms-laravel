<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Courses;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = array();
        $faker = fake("id");
        /**
         *
         * create table users
         * (
         * id                bigint unsigned auto_increment
         * primary key,
         * name              varchar(255)         not null,
         * image             varchar(255)         null,
         * email             varchar(255)         not null,
         * email_verified_at timestamp            null,
         * password          varchar(255)         not null,
         * is_admin          tinyint(1) default 0 not null,
         * is_teacher        tinyint(1) default 0 not null,
         * remember_token    varchar(100)         null,
         * created_at        timestamp            null,
         * updated_at        timestamp            null,
         * constraint users_email_unique
         * unique (email)
         * )
         */
        $seed = Str::random(10);
        for ($i = 0; $i < 10; $i++) {
            $users[] = \App\Models\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password' . $i),
                'image' => "https://loremflickr.com/500/500/face?lock=".Str::random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $courses = array();
        for ($i = 0; $i < 5; $i++) {
            /**
             * create table lms.courses
             * (
             * id          bigint unsigned auto_increment
             * primary key,
             * name        varchar(255)    not null,
             * description varchar(255)    not null,
             * image       varchar(255)    not null,
             * author_id   bigint unsigned not null,
             * created_at  timestamp       null,
             * updated_at  timestamp       null,
             * constraint courses_author_id_foreign
             * foreign key (author_id) references lms.users (id)
             * )
             * collate = utf8mb4_unicode_ci;
             */
            $author = $users[$faker->numberBetween(0, 9)];
            //check is_teacher
            if (!$author->is_teacher) {
                $author->is_teacher = true;
                $author->save();
            }
            $courses[] = Courses::create([
                'name' => 'Course ' . $faker->title . $faker->name,
                'description' => $faker->text,
                'author_id' => $author->id,
                'image' => "https://loremflickr.com/500/500/education?lock=".Str::random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $categories = array();
        for ($i = 0; $i < 10; $i++) {
            /**
             * create table lms.categories
             * (
             * id          bigint unsigned auto_increment
             * primary key,
             * name        varchar(255) not null,
             * description varchar(255) not null,
             * image       varchar(255) not null,
             * parent_id   bigint       null,
             * created_at  timestamp    null,
             * updated_at  timestamp    null
             * )
             * collate = utf8mb4_unicode_ci;
             */
            $categories[] = \App\Models\Categories::create([
                'name' => $faker->jobTitle,
                'description' => 'Description ' . $i,
                'image' => "https://loremflickr.com/500/500/job?lock=".Str::random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        //add categories to courses
        foreach ($courses as $course) {
            //randomly add 3 categories to each course
            for ($i = 0; $i < 3; $i++) {
                $course->categories()->attach($categories[rand(0, count($categories) - 1)]);
            }
        }

        //add lessons to each course
        foreach ($courses as $course) {
            for ($i = 0; $i < 5; $i++) {
                /**
                 * create table lms.lessons
                 * (
                 * id              bigint unsigned auto_increment
                 * primary key,
                 * name            varchar(255)    not null,
                 * description     varchar(255)    not null,
                 * video_url       varchar(255)    null,
                 * attachment_path varchar(255)    null,
                 * section         varchar(255)    null,
                 * chat_room_id    bigint unsigned null,
                 * course_id       bigint unsigned null,
                 * created_at      timestamp       null,
                 * updated_at      timestamp       null,
                 * constraint lessons_chat_room_id_foreign
                 * foreign key (chat_room_id) references lms.chat_rooms (id),
                 * constraint lessons_course_id_foreign
                 * foreign key (course_id) references lms.courses (id)
                 * )
                 * collate = utf8mb4_unicode_ci;
                 */
                $lesson = $course->lessons()->create([
                    'name' => 'Lesson ' . $i,
                    'description' => 'Description ' . $i,
                    'video_url' => rand(0, 1) ? 'https://www.youtube.com/watch?v=dQw4w9WgXcQ' : null,
                    'attachment_path' => rand(0, 1) ? 'https://loremflickr.com/500/500/job?lock='.Str::random() : null,
                    'section' => $i > 2 ? 2 : 1,
                    'course_id' => $course->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                //make chat room
                /**
                 * create table lms.chat_rooms
                 * (
                 * id          bigint unsigned auto_increment
                 * primary key,
                 * name        varchar(255)         null,
                 * description varchar(255)         null,
                 * image       varchar(255)         null,
                 * is_public   tinyint(1) default 0 not null,
                 * is_disabled tinyint(1) default 0 not null,
                 * is_direct   tinyint(1) default 0 not null,
                 * created_at  timestamp            null,
                 * updated_at  timestamp            null
                 * )
                 * collate = utf8mb4_unicode_ci;
                 */
                $chat_room = \App\Models\ChatRoom::create([
                    'name' => 'Lesson ' . $i,
                    'description' => 'Description ' . $i,
                    'is_public' => 1,
                    'is_disabled' => rand(0, 1),
                    'is_direct' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $lesson->chat_room_id = $chat_room->id;
                $lesson->save();

                /**
                 *
                 * create table lms.messages
                 * (
                 * id              bigint unsigned auto_increment
                 * primary key,
                 * text            varchar(255)    not null,
                 * attachment_path varchar(255)    null,
                 * user_id         bigint unsigned not null,
                 * chat_room_id    bigint unsigned null,
                 * message_id      bigint unsigned null,
                 * created_at      timestamp       null,
                 * updated_at      timestamp       null,
                 * constraint messages_chat_room_id_foreign
                 * foreign key (chat_room_id) references lms.chat_rooms (id),
                 * constraint messages_message_id_foreign
                 * foreign key (message_id) references lms.messages (id),
                 * constraint messages_user_id_foreign
                 * foreign key (user_id) references lms.users (id)
                 * )
                 * collate = utf8mb4_unicode_ci;
                 */
                $amount_messages = rand(1, 100);
                $messages = array();
                for ($k = 0; $k < $amount_messages; $k++) {
                    $parent_message_id = null;
                    if (rand(0, 6) > 5 && count($messages) > 0) {
                        $parent_message_id = $messages[rand(0, count($messages) - 1)]->id;
                    }
                    $messages[] = \App\Models\Message::create([
                        'text' => $faker->text(100),
                        'attachment_path' => rand(0, 1) ? 'https://loremflickr.com/500/500/job?lock='.Str::random() : null,
                        'user_id' => $users[rand(0, count($users) - 1)]->id,
                        'chat_room_id' => $chat_room->id,
                        'message_id' => $parent_message_id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }


                $should_add_quiz = rand(0, 1);
                if ($should_add_quiz) {
                    $number_of_questions = rand(1, 5);
                    for ($j = 0; $j < $number_of_questions; $j++) {
                        /**
                         *     id                   bigint unsigned auto_increment
                         * primary key,
                         * name                 varchar(255)         not null,
                         * question             varchar(255)         not null,
                         * is_multiple_choice   tinyint(1) default 0 not null,
                         * is_true_false        tinyint(1) default 0 not null,
                         * is_fill_in_the_blank tinyint(1) default 0 not null,
                         * answer               varchar(255)         not null,
                         * lesson_id            bigint unsigned      null,
                         * created_at           timestamp            null,
                         * updated_at           timestamp            null,
                         */
                        $type = rand(0, 2);
                        $quiz = $lesson->quizzes()->create([
                            'name' => 'Quiz ' . $j,
                            'question' => $faker->text(100),
                            'is_multiple_choice' => $type == 0,
                            'is_true_false' => $type == 1,
                            'is_fill_in_the_blank' => $type == 2,
                            'answer' => $type == 0 ? null : ($type == 1 ? rand(0, 1) : 'Answer ' . $j),
                            'lesson_id' => $lesson->id,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                        if ($type == 0) {
                            $number_of_choices = rand(2, 5);
                            /**
                             * create table choices
                             * (
                             * id         bigint unsigned auto_increment
                             * primary key,
                             * text       varchar(255)         not null,
                             * is_correct tinyint(1) default 0 not null,
                             * quiz_id    bigint unsigned      null,
                             * created_at timestamp            null,
                             * updated_at timestamp            null,
                             * constraint choices_quiz_id_foreign
                             * foreign key (quiz_id) references quizzes (id)
                             * )
                             */
                            for ($k = 0; $k < $number_of_choices; $k++) {
                                $quiz->choices()->create([
                                    'text' => $faker->text(20),
                                    'is_correct' => rand(0, 10) > 7,
                                    'quiz_id' => $quiz->id,
                                    'created_at' => now(),
                                    'updated_at' => now(),
                                ]);
                            }
                        }
                    }

                }
            }
        }


    }
}
