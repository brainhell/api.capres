<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('username',150)->unique();
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_revocery_codes')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string('usertype',25);
            $table->tinyInteger('block',4);
            $table->tinyInteger('sendEmail',4)->nullable();
            $table->string('activation',100);
            $table->text('params')->nullable();
            $table->timestamp('lastResetTime')->nullable();
            $table->int('resetCount');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');


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
