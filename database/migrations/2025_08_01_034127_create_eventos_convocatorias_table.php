<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosConvocatoriasTable extends Migration
{
   public function up()
{
    Schema::create('eventos_convocatorias', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->text('descripcion');
        $table->timestamp('fecha_inicio')->nullable(); // Permitir NULL
        $table->timestamp('fecha_fin')->nullable(); // Permitir NULL
        $table->enum('tipo', ['evento', 'convocatoria']);
        $table->foreignId('creador_id')->constrained('users')->onDelete('cascade');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('eventos_convocatorias');
    }
}


   
