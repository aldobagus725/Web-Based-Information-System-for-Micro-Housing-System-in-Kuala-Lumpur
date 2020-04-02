<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residences', function (Blueprint $table) {
            $table->increments('residenceID');
            $table->string('address');
            $table->string('numunits');
            $table->string('sizeperunits');
            $table->string('monthlyrental');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE users AUTO_INCREMENT = 100040;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residences');
    }
}
