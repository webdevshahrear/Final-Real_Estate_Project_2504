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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('building_id');
            $table->string('floor');
            $table->string('unit_num')->nullable();
            $table->string('sq_size')->nullable();
            $table->enum('unit_type', [
                '2BHK',
                '3BHK',
                '4BHK',
                '5BHK',
                '6BHK',
            ])->default('2BHK');
            $table->float('amount')->default(0);
            $table->float('security_deposit')->default(0);
            $table->mediumText('details');
            $table->json('images')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
