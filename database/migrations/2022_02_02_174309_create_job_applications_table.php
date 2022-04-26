<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id');
            $table->integer('user_id');
            $table->text('application_title');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->longText('education_qualification');
            $table->string('current_status');
            $table->string('current_salary')->nullable();
            $table->string('current_company')->nullable();
            $table->string('experience')->nullable();
            $table->string('possible_starting_date');
            $table->longText('description');
            $table->string('cv');
            $table->string('agree_all_conditions');
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
        Schema::dropIfExists('job_applications');
    }
}
