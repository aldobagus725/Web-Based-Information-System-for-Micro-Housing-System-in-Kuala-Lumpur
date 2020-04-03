<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->bigIncrements('applicationID');
            $table->timestamp('applicationDate');
            $table->string('requiredMonth');
            $table->string('requiredYear');
            $table->string('status');
            $table->integer('residenceID');
            $table->integer('paymentID');
            $table->integer('userID');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE application AUTO_INCREMENT = 1750100;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application');
    }
}
