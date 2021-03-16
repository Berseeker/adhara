<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_es');
            $table->string('nombre_en');
            $table->longText('desc_es');
            $table->longText('desc_en');
            $table->boolean('isTarifaMagica')->default(FALSE);
            $table->boolean('incluye_alimentos')->default(FALSE);
            $table->boolean('pago_x_destino')->default(FALSE);
            $table->bigInteger('stock');

            $table->foreignId('hotel_id')
                ->constrained('hoteles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('plan_habitacion_id')
                ->constrained('planes_habitacion')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('categoria_cuarto_id')
                ->constrained('categorias_cuarto')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('habitaciones');
    }
}
