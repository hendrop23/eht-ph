<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_masuks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idPetani')->constrained('petanis');
            $table->integer('kuTebu');
            $table->decimal('rendemen', 8, 2);
            $table->decimal('rendemenPetani', 8, 2);
            $table->decimal('gulaPetani', 8, 2);
            $table->integer('tetes');
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
        Schema::dropIfExists('data_masuks');
    }
}
