<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Rent payments table — tracks monthly rent bills per tenant.
     * Bills are generated from the NEXT month after approval.
     */
    public function up(): void
    {
        Schema::create('rent_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tennant_id');
            $table->unsignedBigInteger('unit_id')->nullable();

            // Billing period
            $table->string('bill_month');      // e.g. "2026-08" (YYYY-MM)
            $table->date('due_date');           // due date for this bill

            // Amounts
            $table->decimal('rent_amount', 10, 2)->default(0);
            $table->decimal('service_charge', 10, 2)->default(0);
            $table->decimal('utility_charge', 10, 2)->default(0);
            $table->decimal('total_amount', 10, 2)->default(0);

            // Payment status
            $table->enum('status', ['unpaid', 'paid', 'overdue'])->default('unpaid');
            $table->timestamp('paid_at')->nullable();
            $table->string('payment_method')->nullable(); // bKash, cash, etc.
            $table->string('transaction_id')->nullable();

            $table->timestamps();

            $table->foreign('tennant_id')->references('id')->on('tennants')->cascadeOnDelete();
            $table->foreign('unit_id')->references('id')->on('units')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rent_payments');
    }
};
