<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
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
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('id_owner');
            $table->timestamps();
        });

        Schema::create('unitpeoples', function (Blueprint $table) {
            $table->id();
            $table->integer('id_unit');
            $table->string('name');
            $table->date('birthdate');
            $table->timestamps();
        });

        Schema::create('unitvehicles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('color');
            $table->string('plate');
            $table->timestamps();
        });

        Schema::create('unitpets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('race');
            $table->timestamps();
        });

        Schema::create('walls', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->datetime('datecreated');
            $table->timestamps();
        });

        Schema::create('walllikes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_wall');
            $table->integer('id_user');
            $table->timestamps();
        });

        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('fileurl');
            $table->timestamps();
        });

        Schema::create('billets', function (Blueprint $table) {
            $table->id();
            $table->integer('id_unit');
            $table->string('title');
            $table->string('fileurl');
            $table->timestamps();
        });

        Schema::create('warnings', function (Blueprint $table) {
            $table->id();
            $table->integer('id_unit');
            $table->string('title');
            $table->string('status')->default('IN_REVIEW'); //IN_REVIEW OR RESOLVED
            $table->date('datecreated');
            $table->text('photos'); //foto1.jpg, foto2.jpg
            $table->timestamps();
        });

        Schema::create('foundandlost', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('LOST'); //LOST OR RECOVERED
            $table->string('photo');
            $table->string('description');
            $table->string('where');
            $table->date('datecreated');
            $table->timestamps();
        });

        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->integer('allowed')->default(1);
            $table->string('title');
            $table->string('cover');
            $table->string('days'); // 0,1,2,3,4,5,6
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });

        Schema::create('areadisableddays', function (Blueprint $table) {
            $table->id();
            $table->integer('id_area');
            $table->date('day');
            $table->timestamps();
        });

        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('id_unit');
            $table->integer('id_area');
            $table->datetime('reservation_date');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('units');
        Schema::dropIfExists('unitpeoples');
        Schema::dropIfExists('unitvehicles');
        Schema::dropIfExists('unitpets');
        Schema::dropIfExists('walls');
        Schema::dropIfExists('walllikes');
        Schema::dropIfExists('docs');
        Schema::dropIfExists('billets');
        Schema::dropIfExists('warnings');
        Schema::dropIfExists('foundandlost');
        Schema::dropIfExists('areas');
        Schema::dropIfExists('areadisableddays');
        Schema::dropIfExists('reservations');
    }
}
