<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            if (Schema::hasColumn('properties', 'bedrooms')) {
                $table->dropColumn(['bedrooms', 'bathrooms']);
            }
        });
    }
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
        });
    }
};
