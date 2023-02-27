<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_teacher')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        //make default user
        $user = new \App\Models\User();
        $random = "password";
        $user->name = 'admin';
        $user->email = 'admin@localhost';
        $user->password = Hash::make($random);
        $user->is_admin = true;
        $user->save();
        echo PHP_EOL;
        echo "Default user created with email: ";
        echo PHP_EOL;
        echo PHP_EOL;
        echo "Email: admin@localhost";
        echo PHP_EOL;
        echo "Password: $random";
        echo PHP_EOL;

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
