<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_produks', function (Blueprint $table) {
            $table->id();
            $table->Date('Tanggal', 10);
            $table->integer('Pengguna_ID');
            $table->decimal('Total_Harga', 10, 2);
            $table->enum('Status', ['Selesai', 'Pending', 'Dibatalkan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_produks');
    }
};
