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
        Schema::create('danins', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('bagian')->nullable();
            $table->string('gambar')->nullable();
            $table->string('link')->nullable();
            $table->longText('kode')->nullable();
            $table->longText('informasi')->nullable();
            $table->boolean('aktif')->default(false);
            $table->integer('posisi')->nullable();
            $table->unsignedBigInteger('danin_id')->nullable();
            $table->unsignedBigInteger('idnya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danins');
    }
};
