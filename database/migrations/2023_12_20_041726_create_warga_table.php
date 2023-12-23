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
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Gambar');
            $table->string('Email')->unique();
            $table->string('Instagram');
            $table->string('Tiktok');
            $table->string('vote')->nullable();
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('warga');
        Schema::table('warga', function (Blueprint $table) {
            $table->dropColumn('vote');
        });
    }
};
