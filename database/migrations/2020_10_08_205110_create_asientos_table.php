<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->decimal('ufv',8,2)->nullable();
            $table->decimal('tipo_cambio',8,2)->nullable();
            $table->decimal('total_debe',8,2);
            $table->decimal('total_haber',8,2);
            $table->text('glosa')->nullable();
            $table->string('comprobante', 255)->nullable();
            $table->foreignId('estado_id')->constrained();
            $table->foreignId('reviewer_id')
                    ->nullable()
                    ->constrained('users');
            $table->foreignId('approver_id')
                    ->nullable()
                    ->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asientos');
    }
}
