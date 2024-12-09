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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('fav_icon')->nullable();
            $table->string('nama_web')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('id_fb')->nullable();
            $table->string('id_ig')->nullable();
            $table->string('id_yt')->nullable();
            $table->string('id_tiktok')->nullable();
            $table->string('id_shopee')->nullable();
            $table->string('id_tokped')->nullable();
            $table->string('medsos_1')->nullable();
            $table->string('medsos_2')->nullable();
            $table->string('medsos_3')->nullable();
            $table->string('medsos_4')->nullable();
            $table->string('medsos_5')->nullable();
            $table->string('medsos_6')->nullable();
            $table->string('medsos_7')->nullable();
            $table->string('medsos_8')->nullable();
            $table->string('medsos_9')->nullable();
            $table->string('medsos_10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
