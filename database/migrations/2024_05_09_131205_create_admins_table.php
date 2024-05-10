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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('passwordhint')->nullable();
            $table->string('image')->nullable();
            $table->string('adhaar')->nullable();
            $table->string('pan')->nullable();
            $table->longText('address')->nullable();
            $table->integer('pincode')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('status', ['1', '0'])->default('0')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
