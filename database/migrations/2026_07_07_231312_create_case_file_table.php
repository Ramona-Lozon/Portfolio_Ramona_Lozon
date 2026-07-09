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
        Schema::create('case_file', function (Blueprint $table) {
            $table->id();
            $table->string('project', 250);
            $table->string('proposition', 1500);
            $table->string('deliverables', 1500);
            $table->string('outcome', 1500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_file');
    }
};
