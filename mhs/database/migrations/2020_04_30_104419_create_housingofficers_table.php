<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousingOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housingofficers', function (Blueprint $table) {
            $table->bigIncrements('housingofficer_id');
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('usertype')->default('Housing Officer');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE housingofficers AUTO_INCREMENT = 1700800;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('housingofficers');
    }
}
