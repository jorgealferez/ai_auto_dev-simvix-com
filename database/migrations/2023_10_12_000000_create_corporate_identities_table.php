<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Código original (actualmente sin contenido previo) integrando la funcionalidad de migración para 'corporate_identities'

return new class extends Migration
{
    /**
     * Ejecuta las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_identities', function (Blueprint $table) {
            $table->id();
            // Título identificador de la identidad corporativa
            $table->string('title');
            // Descripción general y notas del proceso
            $table->text('description')->nullable();
            // Paleta de colores definida (se puede almacenar como JSON o texto delimitado)
            $table->string('palette')->nullable();
            // Tipografías escogidas
            $table->string('typography')->nullable();
            // Iconografía utilizada
            $table->string('iconography')->nullable();
            // Logotipo o referencia al mismo
            $table->string('logo')->nullable();
            // Otros elementos gráficos relevantes
            $table->string('graphics')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Revierte las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corporate_identities');
    }
};
