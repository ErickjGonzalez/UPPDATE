<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('aspirantes', function (Blueprint $table) {
        $table->id();

        $table->string('nombre_completo');
        $table->string('curp')->unique();
        $table->date('fecha_nacimiento');
        $table->string('telefono');

        $table->string('genero')->nullable(); // Hombre, Mujer, Otro
        $table->string('genero_otro')->nullable(); // solo si elige "Otro"

        $table->string('escuela_procedencia')->nullable();
        $table->string('municipio')->nullable();
        $table->string('estado')->nullable();
        $table->string('lengua_indigena')->nullable();

        $table->boolean('discapacidad_visual')->default(false);
        $table->boolean('discapacidad_auditiva')->default(false);
        $table->boolean('discapacidad_motriz')->default(false);
        $table->boolean('discapacidad_otra')->default(false);
        $table->string('discapacidad_otra_texto')->nullable();

        $table->string('correo')->unique();
        $table->string('usuario')->unique();
        $table->string('password');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirantes');
    }
};
