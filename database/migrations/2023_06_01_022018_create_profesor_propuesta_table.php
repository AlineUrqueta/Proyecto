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
        Schema::create('profesor_propuestas', function (Blueprint $table) {
            $table->integer('propuesta_id')->unsigned();
            $table->string('profesor_rut', 10);
            $table->date('fecha');
            $table->time('hora', $precision = 0);
            $table->text('comentario');
            $table->timestamps();

            $table->primary(['propuesta_id', 'profesor_rut']);
            
            $table->foreign('propuesta_id')->references('id')->on('propuestas')->onDelete('cascade');
            $table->foreign('profesor_rut')->references('rut')->on('profesores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor_propuestas');
    }
};
