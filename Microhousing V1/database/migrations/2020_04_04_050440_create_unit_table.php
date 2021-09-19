<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitTable extends Migration{
    public function up(){
        Schema::create('unit', function (Blueprint $table) {
            $table->bigIncrements('unitNo');
            $table->string('availability');
            $table->bigInteger('residenceID');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE unit AUTO_INCREMENT = 1200;");
    }
    public function down(){
        Schema::dropIfExists('unit');
    }
}
