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
        Schema::create('lamarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelamar_id');
            $table->unsignedBigInteger('postingan_id');
            $table->string('cv');
            $table->string('status');
           
           
            
            $table->timestamps();

             // Menetapkan kunci asing ke kolom 'id' di tabel 'users'
             $table->foreign('pelamar_id')->references('id')->on('pelamars')->onDelete('cascade');
             $table->foreign('postingan_id')->references('id')->on('postingans')->onDelete('cascade');
 });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamarans');
    }
};
