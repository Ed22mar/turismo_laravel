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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();

            // FK -> usuarios
            $table->foreignId('usuario_id')
                ->constrained('users')
                ->onDelete('cascade');

            // FK -> hoteis
            $table->foreignId('hotel_id')
                ->constrained('hoteis')
                ->onDelete('cascade');


            $table->date('data_inicial'); // check-in
            $table->date('data_final');   // check-out
            $table->enum('status', ['pendente', 'confirmada', 'cancelada'])->default('pendente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
