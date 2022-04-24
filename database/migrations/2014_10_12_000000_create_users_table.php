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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('birthplace')->nullable();
            $table->dateTime('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital')->nullable();
            $table->dateTime('joindate')->nullable();
            $table->integer('deptid')->nullable();
            $table->string('joblevel')->nullable();
            $table->integer('roleid')->default(0);
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
        Schema::dropIfExists('users');
    }
}
