<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenidadesCuartoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenidades_cuarto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_es');
            $table->string('nombre_en');
            $table->longText('desc_es')->nullable();
            $table->longText('desc_en')->nullable();
            $table->string('icon');
            $table->string('tag_amenidad_cuarto');
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
        Schema::dropIfExists('amenidades_cuarto');
    }
}
