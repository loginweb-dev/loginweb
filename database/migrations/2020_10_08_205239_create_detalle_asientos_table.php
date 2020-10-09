<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleAsientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_asientos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->decimal('debe',8,2)->nullable();
            $table->decimal('haber',8,2)->nullable();
            $table->text('glosa')->nullable();
            $table->unsignedBigInteger('cuenta_id')->nullable();
            $table->foreign('cuenta_id')->references('id')->on('detalle_cuentas');
            $table->foreignId('asiento_id')
                  ->constrained();
            $table->string('tipo',10)->nullable();
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
        Schema::dropIfExists('detalle_asientos');
    }
}
