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
                'has_security',
                'has_generator',
                'has_ac',
                'has_free_maintenance',
            ]);
        });
    }
};
