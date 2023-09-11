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
        Schema::table('detil_pekerja', function (Blueprint $table) {
            $table->integer('lama_pengalaman');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detil_pekerja', function (Blueprint $table) {
            $table->integer('lama_pengalaman');
        });
    }
};