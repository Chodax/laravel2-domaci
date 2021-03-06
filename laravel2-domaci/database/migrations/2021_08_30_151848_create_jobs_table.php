<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->timestamps();
            $table->foreignId('school_id')->constrained();
            $table->foreignId('people_id')->constrained();
            $table->string('job');
            //$table->foreign('people_id')->references('id')->on('people');
            //$table->primary(['school_id', 'people_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
