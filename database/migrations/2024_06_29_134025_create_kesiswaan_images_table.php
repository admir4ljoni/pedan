<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kesiswaan_images', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->unsignedBigInteger('kesiswaan_id');

            $table->foreign('kesiswaan_id')->references('id')->on('kesiswaans');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesiswaan_images');
    }
};
