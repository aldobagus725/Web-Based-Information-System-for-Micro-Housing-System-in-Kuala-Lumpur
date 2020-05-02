<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidencesTable extends Migration{
    public function up(){
        Schema::create('residences', function (Blueprint $table) {
            $table->bigIncrements('residenceID');
            $table->string('address');
            $table->string('numunits');
            $table->string('sizeperunits');
            $table->string('monthlyrental');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE residences AUTO_INCREMENT = 100040;");
    }
    public function down(){
        Schema::dropIfExists('residences');
    }
}
