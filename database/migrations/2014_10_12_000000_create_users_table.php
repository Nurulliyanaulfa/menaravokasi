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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('level')->default('user');
            $table->boolean('blokir')->default(false);
            //  $table->string('jenis_kelamin');
            $table->timestamps();
            });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down()
{
Schema::dropIfExists('users');
}

};