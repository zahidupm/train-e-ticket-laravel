<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('train_id');
            $table->foreignId('station_id')->constrained('stations');
            $table->time('time');
            $table->float('ac_b_price')->nullable();
            $table->float('ac_s_price')->nullable();
            $table->float('snigdha_price')->nullable();
            $table->float('f_berth_price')->nullable();
            $table->float('f_seat_price')->nullable();
            $table->float('f_chair_price')->nullable();
            $table->float('s_chair_price')->nullable();
            $table->float('shovon_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
