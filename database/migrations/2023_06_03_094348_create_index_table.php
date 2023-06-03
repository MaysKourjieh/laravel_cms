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
        Schema::create('index', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('product_title')->nullable();
            $table->text('product_description')->nullable();
            $table->text('product_cta')->nullable();
            $table->text('about_title')->nullable();
            $table->text('about_subtitle')->nullable();
            $table->text('about_heading')->nullable();
            $table->text('about_description')->nullable();
            $table->text('about_cta')->nullable();
            $table->text('team_title')->nullable();
            $table->text('team_subtitle')->nullable();
            $table->text('contact_title')->nullable();
            $table->text('contact_subtitle')->nullable();
            $table->text('contact_submit_button_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('index');
    }
};
