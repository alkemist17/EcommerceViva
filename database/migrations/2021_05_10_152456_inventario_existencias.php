<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InventarioExistencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_existencias', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('lote');
            $table->date('fecha_vencimiento');
            $table->integer('cantidad_empaque');
            $table->string('cantidad');
            $table->integer('caja');
            $table->integer('unidad');
            $table->integer('total_unidades');
            $table->char('sucursal', 2);
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
        Schema::drop('inventario_existencias');
    }
}
