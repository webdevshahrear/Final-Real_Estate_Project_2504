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
        Schema::table('units', function (Blueprint $table) {
            $table->unsignedTinyInteger('bedrooms')->default(1)->after('unit_type');
            $table->date('available_from')->nullable()->after('status');
            $table->boolean('pet_friendly')->default(false)->after('available_from');
            $table->boolean('is_furnished')->default(false)->after('pet_friendly');
            $table->boolean('has_gym')->default(false)->after('is_furnished');
            $table->boolean('has_rooftop')->default(false)->after('has_gym');
            $table->boolean('has_parking')->default(false)->after('has_rooftop');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('units', function (Blueprint $table) {
            $table->dropColumn([
                'bedrooms',
                'available_from',
                'pet_friendly',
                'is_furnished',
                'has_gym',
                'has_rooftop',
                'has_parking',
            ]);
        });
    }
};
