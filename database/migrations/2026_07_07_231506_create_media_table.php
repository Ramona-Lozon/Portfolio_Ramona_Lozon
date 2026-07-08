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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table  ->foreignId('case_file_id')
                    ->constrained('case_file')
                    ->onDelete('cascade');
            $table->string('Hero', 250)->nullable();
            $table->string('prop_ex', 250)->nullable();
            $table->string('prop_caption', 1500)->nullable();
            $table->string('work_ex', 250)->nullable();
            $table->string('work_caption', 250)->nullable();
            $table->string('product_ex', 250)->nullable();
            $table->string('product_caption', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
