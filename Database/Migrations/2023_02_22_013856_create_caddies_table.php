<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaddiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caddies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status', [1, 2, 3])->default(2)->comment('1:available;2:unavailable;3:booked');
            $table->foreignId('booking_id')->constrained('bookings')->onUpdate('cascade')->onDelete('cascade');
            $table->float('member_weekday_amount');
            $table->float('member_weekend_amount');
            $table->float('visitor_weekday_amount');
            $table->float('visitor_weekend_amount');
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
        Schema::dropIfExists('caddies');
    }
}
