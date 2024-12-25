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
        Schema::table('books', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->string('author')->nullable()->change();
            $table->year('year')->nullable()->change();
            $table->string('genre')->nullable()->change();
            $table->string('description')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('title')->nullable(false)->change();
            $table->string('author')->nullable(false)->change();
            $table->year('year')->nullable(false)->change();
            $table->string('genre')->nullable(false)->change();
            $table->string('description')->nullable(false)->change();
        });
    }
};
