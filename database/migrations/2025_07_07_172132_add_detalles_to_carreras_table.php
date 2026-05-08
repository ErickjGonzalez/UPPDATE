<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetallesToCarrerasTable extends Migration
{
   public function up(): void
{
    Schema::table('carreras', function (Blueprint $table) {
        $table->string('coordinador')->nullable();
        $table->string('duracion')->nullable();
        $table->string('modalidad')->nullable();
        $table->text('perfil_ingreso')->nullable();
        $table->text('perfil_egreso')->nullable();
        $table->text('areas_especializacion')->nullable();
        $table->text('campo_profesional')->nullable();
        $table->text('testimonios')->nullable();
    });
}

public function down(): void
{
    Schema::table('carreras', function (Blueprint $table) {
        $table->dropColumn([
            'coordinador',
            'duracion',
            'modalidad',
            'perfil_ingreso',
            'perfil_egreso',
            'areas_especializacion',
            'campo_profesional',
            'testimonios',
        ]);
    });
}

}
