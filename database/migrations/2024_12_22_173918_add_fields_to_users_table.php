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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable(); // Телефон
            $table->string('location')->nullable(); // Локація
            $table->string('facebook')->nullable(); // Соціальні мережі
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('profile_picture')->nullable(); // Фото профілю
            $table->json('skills')->nullable(); // Навички (JSON)
            $table->json('education')->nullable(); // Освіта (JSON)
            $table->json('languages')->nullable(); // Мови
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('location');
            $table->dropColumn('facebook');
            $table->dropColumn('linkedin');
            $table->dropColumn('twitter');
            $table->dropColumn('profile_picture');
            $table->dropColumn('skills');
            $table->dropColumn('education');
            $table->dropColumn('languages');
        });
    }
};
