<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('viewing_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->date('preferred_move_in_date')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->unsignedBigInteger('tennant_id')->nullable(); // linked after signup
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units')->nullOnDelete();
            $table->foreign('tennant_id')->references('id')->on('tennants')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('viewing_requests');
    }
};
