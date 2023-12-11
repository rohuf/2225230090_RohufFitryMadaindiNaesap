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
        Schema::create('tokorohuf', function (Blueprint $table) {
            $table->string('Nama');
            $table->char('Nomor Telepon');
            $table->string('Alamat');
            $table->string('Grup/Solo');
            $table->string('Album');
            $table->string('Versi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokorohuf');
    }
};
