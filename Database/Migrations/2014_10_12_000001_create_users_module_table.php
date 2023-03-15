<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nickname')->nullable();
            $table->string('username')->unique();
            $table->date('date_of_birth')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->string('phone_no')->nullable();
            $table->string('google_id')->nullable();
            $table->string('member_id')->nullable()->comment('null:visitor;data:member');
            $table->boolean('active')->default(true);
            $table->dateTime('last_login')->nullable();
        });
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
}
