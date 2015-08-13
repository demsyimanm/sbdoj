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

        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('konten')->nullable();
            $table->dateTime('waku_mulai')->nullable();
            $table->dateTime('waktu_akhir')->nullable();
            $table->string('kelas')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

         Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_id');
            $table->string('konten')->nullable();
            $table->string('jawaban')->nullable();
            $table->dateTime('waktu');
            $table->softDeletes();
            $table->timestamps();
        });
         
         Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('level')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

         Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('questions_id');
            $table->integer('users_id');
            $table->integer('nilai')->nullable();
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
        Schema::drop('users');
        Schema::drop('admins');
        Schema::drop('questions');
        Schema::drop('events');
        Schema::drop('submissions');

    }
}
