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
        Schema::create('pivot__guru__mapels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_guru');
            $table->unsignedBigInteger('id_mapel');

            // Referensi ke tabel Guru dan Mapel
            $table->foreign('id_guru')->references('id')->on('gurus')->onDelete('cascade');
            $table->foreign('id_mapel')->references('id')->on('mapels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot__guru__mapels');
    }
};
