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
        Schema::create('scam_reports', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('country')->nullable();
            $table->string('email');
            $table->string('phone_number');
            $table->string('lost_amount');
            $table->string('deposit_method')->nullable();
            $table->date('transaction_date')->nullable();
            $table->string('wallet_addresses')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scam_reports');
    }
};
