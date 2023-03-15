<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id')->unique();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date');
            $table->foreignId('course_id')->constrained('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('time_slot_id')->constrained('time_slots')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('hole_id')->constrained('holes')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('payment_status', [0, 1, 2])->default(0)->comment('0:pending;1:completed;2:incomplete');
            $table->enum('booking_status', [0, 1, 2])->default(0)->comment('0:pending;1:completed;2:incomplete');
            $table->text('notes')->nullable();
            $table->integer('total_players');
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
        Schema::dropIfExists('bookings');
    }
}
