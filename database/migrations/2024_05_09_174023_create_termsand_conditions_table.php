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
        Schema::create('termsand_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->string('slug')->nullable();
            $table->longText('content')->nullable();
            $table->enum('status', ['Active', 'InActive'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termsand_conditions');
    }
};
