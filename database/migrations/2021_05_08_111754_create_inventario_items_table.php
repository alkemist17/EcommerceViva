<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_items', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('slug')->unique();
            $table->string('descripcion');
            $table->string('referencia');
            $table->string('referencia2');
            $table->integer('grupo1');
            $table->integer('grupo2');
            $table->integer('grupo3');
            $table->char('clase_iva', 1);
            $table->integer('porcentaje_iva');
            $table->char('estado', 1);
            $table->char('fabricante', 4);
            $table->char('linea_fabricante', 6);
            $table->integer('temperatura');
            $table->char('controlado', 2);
            $table->integer('cantidad_empaque');
            $table->char('ubicacion', 2);
            $table->char('formulacion', 2);
            $table->string('grupo_farmacologico');
            $table->string('invima');
            $table->date('fecha_invima')->nulleable();
            $table->string('forma_farmaceutica');
            $table->string('presentacion');
            $table->string('principio_activo');
            $table->string('programa');
            $table->string('codigo_atc');
            $table->string('codigo_cum');
            $table->string('indicaciones');
            $table->char('oferta', 2);
            $table->boolean('featured')->default(false);
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
        Schema::dropIfExists('inventario_items');
    }
}
