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
        Schema::table('indikator_sikkus', function (Blueprint $table) {
            $table->dropForeign(['kegiatan_sikku_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('indikator_sikkus', function (Blueprint $table) {
            $table->foreignId('kegiatan_sikku_id')->nullable()->constrained('kegiatan_sikkus')->cascadeOnUpdate()->nullOnDelete();
        });
    }
};
