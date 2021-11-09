<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            // Luogo di destinazione
            $table->string('place_destination', 50);
            // Data di arrivo
            $table->date('check_in');
            // Data di partenza
            $table->date('check_out');
            // Numero di persone
            $table->tinyInteger('guests');
            $table->string('name_host', 50);
            $table->string('name_structure', 50);
            // ->unsigned() => non è possibile inserire numeri negativi
            $table->float('price', 7, 2);
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
        Schema::dropIfExists('trips');
    }
}
