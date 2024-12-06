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
        Schema::create('siswas', function (Blueprint $table) {
        $table->id();
        $table->string('nis')->unique();
        $table->string('nama');
        $table->text('alamat');
        $table->string('no_hp');
        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
        $table->string('hobi')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};