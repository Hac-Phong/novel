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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('chapter_number');
            $table->text('content');
            $table->boolean('is_published')->default(false);
            $table->dateTime('published_at')->nullable();
            $table->string('word_count')->nullable();
            $table->integer('chapter_price')->default(0);
            $table->boolean('is_password')->default(false);
            $table->string('password')->nullable();
            $table->bigInteger('sort')->default(0);
            $table->foreignId('novel_id')->constrained('novels')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
