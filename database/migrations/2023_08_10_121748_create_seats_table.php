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
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('bogi_id');
            $table->foreignId('train_id');
            $table->unsignedBigInteger('type')->default(0)->comment('0=shovon,1=shovon chair');
            $table->unsignedBigInteger('booked')->default(0)->comment('0=open,1=booked');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
