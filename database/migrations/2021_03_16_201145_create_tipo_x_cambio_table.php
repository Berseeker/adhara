<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoXCambioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_x_cambio', function (Blueprint $table) {
            $table->id();
            $table->double('valor_respecto_dolar');
            $table->foreignId('pais_id')
                ->constrained('paises')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
            $table->sofDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_x_cambio');
    }
}
