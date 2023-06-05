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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('photo')->nullable();
            $table->text('name')->nullable();
            $table->text('subtext')->nullable();
            $table->text('description')->nullable();
            $table->text('supplement_facts')->nullable();
            $table->text('suggested_use')->nullable();
            $table->text('resources')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
