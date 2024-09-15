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
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('url_link')->nullable();
            $table->string('original_name')->nullable();
            $table->string('other_name')->nullable();
            $table->text('notification')->nullable();
            $table->string('total_chapters')->nullable();
            $table->string('status');
            $table->string('cover_image');
            $table->boolean('is_published')->default(false);
            $table->boolean('is_vip')->default(false);
            $table->boolean('is_adult')->default(false);
            $table->foreignId('author_id')->constrained('authors')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novels');
    }
};
