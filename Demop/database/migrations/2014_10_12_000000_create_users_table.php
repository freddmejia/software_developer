<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('categories', function(Blueprint $table)
        {
            $table->id();
            $table->string("name");
            $table->string('key');
            $table->timestamps();
        });

        Schema::create('data', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('author');
            $table->string('title');
            $table->string('description');
            $table->string('url');
            $table->string('source');
            $table->string('image');
            $table->string('category');
            $table->string('language');
            $table->string('country');
            $table->string('published_at');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
