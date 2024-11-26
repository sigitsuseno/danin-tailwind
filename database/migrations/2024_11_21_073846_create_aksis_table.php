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
        Schema::create('aksis', function (Blueprint $table) {
            $table->id();
            $table->integer('kait')->nullable();
            $table->string('nama')->nullable();
            $table->string('kriteria')->nullable();
            $table->longText('kode')->nullable();
            $table->string('prilaku')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aksis');
    }
};
