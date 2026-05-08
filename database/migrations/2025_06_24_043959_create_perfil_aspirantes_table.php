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
      Schema::create('perfil_aspirantes', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

    $table->enum('genero', ['Masculino', 'Femenino', 'Prefiero no decir'])->nullable();
    $table->boolean('habla_lengua_indigena')->default(false);
    $table->string('lengua_indigena')->nullable();
    $table->string('institucion_procedencia')->nullable();
    $table->string('municipio')->nullable();
    $table->string('estado')->nullable();
    $table->boolean('tiene_discapacidad')->default(false);
    $table->string('discapacidad')->nullable();

    // otros campos que desees...
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil_aspirantes');
    }
};
