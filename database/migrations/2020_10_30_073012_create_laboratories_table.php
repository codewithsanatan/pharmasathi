<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('lab_name')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('lab_contact_person')->nullable();
            $table->string('lab_contact_no')->nullable();
            $table->string('lab_contact_no2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('lab_open_time')->nullable();
            $table->string('lab_close_time')->nullable();
            $table->string('full_close_day')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('gst_no')->nullable();
            $table->longText('details')->nullable();
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
        Schema::dropIfExists('laboratories');
    }
}
