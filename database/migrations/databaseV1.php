<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatabaseV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nrp')->unique();
            $table->string('nama');
            $table->string('kelas');
            $table->string('password', 255);
            
            $table->rememberToken();
            //$table->boolean('enable')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul')->unique();
            $table->string('konten',1000);
            $table->dateTime('waktu');
            $table->string('key_id');
            $table->softDeletes();
            $table->timestamps();
        });

         Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_id');
            $table->string('user_id');
            $table->string('konten',1000);
            $table->dateTime('waktu');
            $table->softDeletes();
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
        Schema::drop('user');
        Schema::drop('post');
        Schema::drop('comment');
    }
}
