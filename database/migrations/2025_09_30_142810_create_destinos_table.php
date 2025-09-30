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
        Schema::create('destinos', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nome do destino
            $table->text('descricao'); // Descrição do destino
            $table->string('imagem')->nullable(); // URL ou caminho da imagem do destino
            $table->string('categoria'); // Categoria do destino (praia, montanha, cidade, etc.)
            $table->string('localizacao'); // Localização do destino
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinos');
    }
};
