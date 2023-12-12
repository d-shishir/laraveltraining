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
        Schema::create('books', function (Blueprint $table) {
            $table->id('bookId');
            $table->string('name', 100);
            $table->integer('pagecount');
            $table->integer('point');
            $table->unsignedBigInteger('authorId');
            $table->foreign('authorId')->on('authors')->references('authorId');
            $table->unsignedBigInteger('typeId');
            $table->foreign('typeId')->on('types')->references('typeId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['authorId']);
            $table->dropForeign(['typeId']);
        });
        Schema::dropIfExists('books');
    }
};
