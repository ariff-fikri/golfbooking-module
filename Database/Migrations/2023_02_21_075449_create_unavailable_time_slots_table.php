<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnavailableTimeSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unavailable_time_slots', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('course_id')->constrained('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('time_slot_id')->constrained('time_slots')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('unavailable_time_slots');
    }
}
