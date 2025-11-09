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
        Schema::create('kursus', function (Blueprint $table) {
            $table->id('id_kursus');
            $table->string('nama_kursus')->nullable();
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 12, 2);
            $table->string('durasi');
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->string('gambar')->default('default.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursus');
    }
};
