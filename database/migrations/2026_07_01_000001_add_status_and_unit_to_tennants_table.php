<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tennants', function (Blueprint $table) {
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->after('phone');
            $table->unsignedBigInteger('unit_id')->nullable()->after('status');
            $table->foreign('unit_id')->references('id')->on('units')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('tennants', function (Blueprint $table) {
            $table->dropForeign(['unit_id']);
            $table->dropColumn(['status', 'unit_id']);
        });
    }
};
