<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InventarioTeleferias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_teleferias', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->dateTime('fecha_creacion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->float('porcentaje_adicional');
            $table->float('porcentaje_teleferia');
            $table->float('porcentaje_base');
            $table->string('dia');
            $table->char('hora_inicio', 4);
            $table->char('hora_fin', 4);
            $table->string('titulo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inventario_teleferias');
    }
}
