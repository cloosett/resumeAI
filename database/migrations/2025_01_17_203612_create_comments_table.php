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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // ID коментаря
            $table->unsignedBigInteger('blog_id'); // Зовнішній ключ на блог
            $table->string('author_name'); // Ім'я автора коментаря
            $table->string('author_email'); // Email автора
            $table->text('content'); // Текст коментаря
            $table->enum('status', ['approved', 'pending', 'spam'])->default('pending'); // Статус коментаря
            $table->unsignedBigInteger('parent_id')->nullable(); // ID батьківського коментаря (для відповіді)
            $table->timestamps();

            // Зв'язки з блогами і батьківським коментарем
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('comments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
