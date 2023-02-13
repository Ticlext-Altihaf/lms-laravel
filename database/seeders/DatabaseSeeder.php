<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Courses;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public static $based_youtube_videos = [
        'https://www.youtube.com/watch?v=QH2-TGUlwu4',
        'https://www.youtube.com/watch?v=dQw4w9WgXcQ&random_useless_param=1',
        'https://www.youtube.com/watch?v=tgbNymZ7vqY',
        'https://www.youtube.com/watch?v=WpYeekQkAdc&random=1',
        'https://www.youtube.com/watch?v=YQHsXMglC9A',
        'https://www.youtube.com/watch?v=6ZfuNTqbHE8&random_param=2',
        'https://www.youtube.com/watch?v=JGwWNGJdvx8',
        'https://www.youtube.com/watch?v=fWNaR-rxAic&random=3',
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = array();
        $faker = fake("id_ID");
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
                'image' => "https://loremflickr.com/500/500/face?random=" . Str::random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $courses = array();
        $course_to_make = rand(5, 10);
        for ($i = 0; $i < $course_to_make; $i++) {
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
                'image' => "https://loremflickr.com/500/500/job?random=" . Str::random(),
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
                'image' => "https://loremflickr.com/24/24/job?random=" . Str::random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $categories = \App\Models\Categories::all();
        //add categories to courses
        foreach ($courses as $course) {
            //randomly add categories to each course
            $categories_to_add = rand(1, 5);
            for ($i = 0; $i < $categories_to_add; $i++) {
                $category = $categories[rand(0, count($categories) - 1)];
                //check if exists
                if ($course->categories()->where('categories_id', $category->id)->exists()) {
                    continue;
                }
                $course->categories()->attach($category->id);
            }
        }

        //add lessons to each course
        foreach ($courses as $course) {
            $lessons_to_add = rand(5, 30);
            for ($i = 1; $i < $lessons_to_add; $i++) {
                /**
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
                $lesson = $course->lessons()->create([
                    'order_no' => $i,
                    'name' => 'Lesson ' . $i,
                    'description' => 'Description ' . $i,
                    'image' => rand(0, 1) ? 'https://loremflickr.com/500/500/job?random=' . Str::random() : null,
                    'section' => 'Section ' . ((int)floor(($i - 1) / 5)) + 1,
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
                $amount_messages = rand(1, 50);
                $messages = array();
                for ($k = 0; $k < $amount_messages; $k++) {
                    $parent_message_id = null;
                    if (rand(0, 6) > 5 && count($messages) > 0) {
                        $parent_message_id = $messages[rand(0, count($messages) - 1)]->id;
                    }
                    $messages[] = \App\Models\Message::create([
                        'text' => $faker->text(100),
                        'attachment_path' => rand(0, 1) ? 'https://loremflickr.com/500/500/job?random=' . Str::random() : null,
                        'user_id' => $users[rand(0, count($users) - 1)]->id,
                        'chat_room_id' => $chat_room->id,
                        'message_id' => $parent_message_id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }


                $content_to_add = rand(2, 15);
                for ($content_order_no = 1; $content_order_no < $content_to_add; $content_order_no++) {
                    $should_add_quiz = rand(0, 1);
                    if ($should_add_quiz) {
                        /**
                         *create table lms.quizzes
                         * (
                         * id                   bigint unsigned auto_increment
                         * primary key,
                         * order_no             int                  not null,
                         * name                 varchar(255)         not null,
                         * text             varchar(255)         not null,
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
                        $type = rand(0, 2);
                        $quiz = $lesson->quizzes()->create([
                            'order_no' => $content_order_no,
                            'name' => 'Quiz ' . $content_order_no,
                            'text' => $faker->text(250),
                            'is_multiple_choice' => $type == 0,
                            'is_true_false' => $type == 1,
                            'is_fill_in_the_blank' => $type == 2,
                            'answer' => $type == 0 ? null : ($type == 1 ? rand(0, 1) : 'Answer ' . $content_order_no),
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

                    } else {
                        //make content
                        /**
                         * create table lms.lesson_contents
                         * (
                         * id         bigint unsigned auto_increment
                         * primary key,
                         * order_no   int             not null,
                         * name       varchar(255)    not null,
                         * markdown   text            not null,
                         * lesson_id  bigint unsigned null,
                         * created_at timestamp       null,
                         * updated_at timestamp       null,
                         * constraint lesson_contents_lesson_id_foreign
                         * foreign key (lesson_id) references lms.lessons (id)
                         * )
                         * collate = utf8mb4_unicode_ci;
                         */
                        //0 = text, 1 = youtube video, 2 = image
                        $type = rand(0, 2);

                        $youtube_video = DatabaseSeeder::$based_youtube_videos[rand(0, count(DatabaseSeeder::$based_youtube_videos) - 1)];
                        $lesson->lessonContents()->create([
                            'order_no' => $content_order_no,
                            'name' => ($type == 0 ? 'Content' : ($type == 1 ? 'Youtube Video' : 'Image')) . ' ' . $content_order_no,
                            'text' => $type == 0 ? $faker->text(1000) : ($type == 1 ? $youtube_video : 'https://loremflickr.com/500/500/job?random=' . Str::random()),
                            'lesson_id' => $lesson->id,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }
            }
        }


    }
}
