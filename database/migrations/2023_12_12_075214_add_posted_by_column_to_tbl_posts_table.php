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
        Schema::table('tbl_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('posted_by');
            $table->foreign('posted_by')->on('users')->references('id');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_posts', function (Blueprint $table) {
            $table->dropForeign(['posted_by']);
            $table->dropColumn(['posted_by']);
        });
    }
};
