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
        Schema::create('bamasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('pangkat');
            $table->string('nim')->unique();
            $table->string('nomor_hp');
            $table->string('foto_profil')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('program_studi_id')->nullable()->constrained('program_studis')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bamasis');
    }
};
