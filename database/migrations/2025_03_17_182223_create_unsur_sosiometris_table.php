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
        Schema::create('unsur_sosiometris', function (Blueprint $table) {
            $table->id();
            $table->string('unsur_sosiometri');
            $table->foreignId('kategori_sosiometri_id')->nullable()->constrained('kategori_sosiometris')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unsur_sosiometris');
    }
};
