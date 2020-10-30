<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->longText('about_me')->nullable();
            $table->string('is_blocked')->default('0')->comment('0=active,1=blocked');
            $table->string('is_deleted')->default('0')->comment('0=active,1=deleted');
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
        Schema::dropIfExists('doctors');
    }
}
