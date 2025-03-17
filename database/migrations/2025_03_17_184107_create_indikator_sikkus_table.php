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
        Schema::create('indikator_sikkus', function (Blueprint $table) {
            $table->id();
            $table->string('indikator');
            $table->string('kode')->unique();
            $table->enum('tipe', ['positif', 'negatif'])->default('positif');
            $table->foreignId('kegiatan_sikku_id')->nullable()->constrained('kegiatan_sikkus')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikator_sikkus');
    }
};
