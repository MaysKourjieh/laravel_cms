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
        Schema::create('general', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('logo')->nullable();
            $table->text('navbar_products_title')->nullable();
            $table->text('navbar_about_title')->nullable();
            $table->text('navbar_team_title')->nullable();
            $table->text('navbar_contact_title')->nullable();
            $table->text('instagram_link')->nullable();
            $table->text('contact_email')->nullable();
            $table->text('lat')->nullable();
            $table->text('lng')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('footer_description')->nullable();
            $table->text('footer_products_title')->nullable();
            $table->text('footer_contact_title')->nullable();
            $table->text('footer_quick_links_title')->nullable();
            $table->text('footer_terms_and_conditions_title')->nullable();
            $table->text('footer_privacy_policy_title')->nullable();
            $table->text('footer_copyrights_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general');
    }
};
