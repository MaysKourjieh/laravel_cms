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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('hero_description')->nullable();
            $table->text('hero_heading')->nullable();
            $table->text('section_1_title')->nullable();
            $table->text('section_1_description')->nullable();
            $table->text('section_2_title')->nullable();
            $table->text('section_2_description')->nullable();
            $table->text('section_3_title')->nullable();
            $table->text('section_3_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
