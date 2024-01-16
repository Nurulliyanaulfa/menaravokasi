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
        Schema::create('profileusahas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('gambar');
            $table->string('jenis_bidang_perusahaan');
            $table->string('alamat');
            $table->string('kontak');
            $table->text('deskripsi_perusahaan');
            $table->text('visi');
            $table->text('misi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profileusahas');
    }
};