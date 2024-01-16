<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pelamars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('gambar');
            $table->string('asal_lembaga');
            $table->string('asal_jurusan');
            $table->string('jenjang_pendidikan');
            $table->string('jk');
            $table->string('alamat');
            $table->string('status');
            $table->string('ringkasan_pribadi');
            $table->string('keahlian');
            
            $table->timestamps();

             // Menetapkan kunci asing ke kolom 'id' di tabel 'users'
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
 });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelamars');
    }
};