<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTable extends Migration{
    public function up(){
        Schema::create('application', function (Blueprint $table) {
            $table->bigIncrements('applicationID');
            $table->integer('userID');
            $table->integer('residenceID');
            $table->timestamp('applicationDate');
            $table->string('requiredMonth');
            $table->string('requiredYear');
            $table->string('status');
            $table->string('payment');
            $table->string('payment_status');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE application AUTO_INCREMENT = 1750100;");
    }
    public function down(){
        Schema::dropIfExists('application');
    }
}
