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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('banner_url');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            //refrensi ke id writers

            $table->foreignId('writer_id')->constrained(
                table:'writers', indexName:'article_writers_id'
            )
            ->onDelete('cascade')
            ->onUpdate('cascade');

            //refrensi ke id category
            $table->foreignId('category_id')->constrained(
                table:'categories', indexName:'articles_categories_id'
            )
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};
