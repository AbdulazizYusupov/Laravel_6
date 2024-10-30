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
        Schema::create('guruhs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('advisor_id')->constrained('advisors')->onDelete('cascade');
            $table->foreignId('kurs_id')->constrained('kurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guruhs');
    }
};
