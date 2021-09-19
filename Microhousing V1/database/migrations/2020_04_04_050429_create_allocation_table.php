<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllocationTable extends Migration{
    public function up(){
        Schema::create('allocation', function (Blueprint $table) {
            $table->bigInteger('applicationID');
            $table->bigInteger('unitNo');
            $table->string('fromDate');
            $table->string('endDate');
            $table->string('duration');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('allocation');
    }
}
