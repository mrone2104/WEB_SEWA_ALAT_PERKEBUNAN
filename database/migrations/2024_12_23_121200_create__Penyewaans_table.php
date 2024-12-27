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
        Schema::create('_penyewaans', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal');
            $table->integer('Pengguna_ID');
            $table->integer('Produk_ID');
            $table->integer('Durasi_Sewa');
            $table->decimal('Biaya_Sewa', 10, 2);
            $table->date('Tanggal_Kembali');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_penyewaans');
    }
};
