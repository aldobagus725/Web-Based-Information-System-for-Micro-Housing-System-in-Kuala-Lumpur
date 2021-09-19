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
            $table->bigIncrements('residenceID');
            $table->string('address');
            $table->string('numunits');
            $table->string('sizeperunits');
            $table->string('monthlyrental');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE residences AUTO_INCREMENT = 100040;");
        DB::table('residences')->insert(
            array(
                'address' => 'Denpasar, Bali',
                'numunits' => '12',
                'sizeperunits' => '300 m2',
                'monthlyrental' => 'RM150',
            )
        );
        DB::table('residences')->insert(
            array(
                'address' => 'Kuningan, Jakarta',
                'numunits' => '16',
                'sizeperunits' => '500 m2',
                'monthlyrental' => 'RM200',
            )
        );
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
