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
        Schema::table('index', function (Blueprint $table) {
            $table->string('carousel_1_photo')->after('carousel_1_subheading')->nullable();
            $table->string('carousel_2_photo')->after('carousel_2_subheading')->nullable();
            $table->string('carousel_3_photo')->after('carousel_3_subheading')->nullable();
            $table->string('products_photo')->after('product_cta')->nullable();
            $table->string('about_photo')->after('about_cta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('index', function (Blueprint $table) {
            //
        });
    }
};
