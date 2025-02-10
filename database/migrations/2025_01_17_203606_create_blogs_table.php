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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // ID блогу
            $table->json('title'); // Назва блогу
            $table->string('slug')->unique(); // Унікальний slug для URL
            $table->json('meta_title')->nullable(); // Короткий опис
            $table->json('meta_description')->nullable(); // Короткий опис
            $table->json('content')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('author_id'); // Автор блогу
            $table->timestamp('published_at')->nullable(); // Дата публікації
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Статус
            $table->timestamps();

            // Зв'язок з таблицею користувачів (автори)
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
