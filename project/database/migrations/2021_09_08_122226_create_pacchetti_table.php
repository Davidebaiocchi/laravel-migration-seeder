<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacchettiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacchetti', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 20);
            $table->string('date', 20);
            $table->string('address', 15);
            $table->string('postal_code', 5);
            $table->tinyInteger('number-people')->unsigned();
            $table->text('description');
            $table->float('price', 6, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacchetti');
    }
}
