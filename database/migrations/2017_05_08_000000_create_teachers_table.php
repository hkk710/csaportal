<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('phonenumber')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('hostellite')->nullable();
            $table->string('bloodgroup')->nullable();
            $table->boolean('approved')->default(false);
            $table->string('password');
            $table->string('pro_pic');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
