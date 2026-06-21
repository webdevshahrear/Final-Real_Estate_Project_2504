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
            if (!Schema::hasColumn('units', 'bedrooms')) {
                $table->unsignedTinyInteger('bedrooms')->default(1)->after('unit_type');
            }
            if (!Schema::hasColumn('units', 'bathrooms')) {
                $table->unsignedTinyInteger('bathrooms')->default(1)->after('bedrooms');
            }
            if (!Schema::hasColumn('units', 'available_from')) {
                $table->date('available_from')->nullable()->after('status');
            }
            if (!Schema::hasColumn('units', 'pet_friendly')) {
                $table->boolean('pet_friendly')->default(false)->after('available_from');
            }
            if (!Schema::hasColumn('units', 'is_furnished')) {
                $table->boolean('is_furnished')->default(false)->after('pet_friendly');
            }
            if (!Schema::hasColumn('units', 'has_gym')) {
                $table->boolean('has_gym')->default(false)->after('is_furnished');
            }
            if (!Schema::hasColumn('units', 'has_rooftop')) {
                $table->boolean('has_rooftop')->default(false)->after('has_gym');
            }
            if (!Schema::hasColumn('units', 'has_parking')) {
                $table->boolean('has_parking')->default(false)->after('has_rooftop');
            }
            if (!Schema::hasColumn('units', 'has_security')) {
                $table->boolean('has_security')->default(false)->after('has_parking');
            }
            if (!Schema::hasColumn('units', 'has_generator')) {
                $table->boolean('has_generator')->default(false)->after('has_security');
            }
            if (!Schema::hasColumn('units', 'has_ac')) {
                $table->boolean('has_ac')->default(false)->after('has_generator');
            }
            if (!Schema::hasColumn('units', 'has_free_maintenance')) {
                $table->boolean('has_free_maintenance')->default(false)->after('has_ac');
            }
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
                'bathrooms',
                'available_from',
                'pet_friendly',
                'is_furnished',
                'has_gym',
                'has_rooftop',
                'has_parking',
                'has_security',
                'has_generator',
                'has_ac',
                'has_free_maintenance',
            ]);
        });
    }
};
