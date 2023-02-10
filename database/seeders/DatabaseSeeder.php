<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Courses;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin_user = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@locahost',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
        $courses = array();
        for ($i = 0; $i < 10; $i++) {
            $courses[] = Courses::create([
                'title' => 'Course ' . $i,
                'description' => 'Description ' . $i,
                'author_id' => $admin_user->id,
                'image' => 'https://picsum.photos/200/300',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $categories = array();
        for ($i = 0; $i < 10; $i++) {
            $categories[] = \App\Models\Categories::create([
                'name' => 'Category ' . $i,
                'description' => 'Description ' . $i,
                'image' => 'https://picsum.photos/200/300',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }



    }
}
