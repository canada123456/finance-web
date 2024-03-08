<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('individuals_authorized', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('known_as');
            $table->string('previous_name');
            $table->string('reference_number');
            $table->string('phone_number')->nullable();
            $table->string('roles')->nullable();
            $table->string('firm_name')->nullable();
            $table->string('involvement_type')->nullable();
            $table->date('effective_from')->nullable();
            $table->string('connection');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individuals_authorized');
    }
};
