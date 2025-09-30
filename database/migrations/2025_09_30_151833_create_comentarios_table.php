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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();

            // FK -> usuarios
            $table->foreignId('usuario_id')
                ->constrained('users')
                ->onDelete('cascade');


            // FK -> destinos
            $table->foreignId('destino_id')
                ->constrained('destinos')
                ->onDelete('cascade');

            $table->text('comentario'); // Texto do comentário
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
