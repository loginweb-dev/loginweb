<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsientoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asiento_user', function (Blueprint $table) {
            $table->id();
            $table->text('observacion')->nullable();
            $table->foreignId('asiento_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('estado_id')->constrained();
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
        Schema::dropIfExists('asiento_users');
    }
}
