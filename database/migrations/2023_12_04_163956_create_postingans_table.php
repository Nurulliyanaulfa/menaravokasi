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
        Schema::create('postingans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perusahaan_id');
            $table->string('foto');
            $table->string('posisi');
            $table->longText('persyaratan');
            $table->longText('deskripsi');
            $table->timestamps();
            $table->foreign('perusahaan_id')->references('id')->on('profileusahas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postingans');
    }
};