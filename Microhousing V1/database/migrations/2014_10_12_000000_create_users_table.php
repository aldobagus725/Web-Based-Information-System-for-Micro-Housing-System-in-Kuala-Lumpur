<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration{
    public function up(){
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('usertype')->nullable();
            $table->string('email')->unique();
            $table->bigInteger('monthlyIncome')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE users AUTO_INCREMENT = 2020100;");
        DB::table('users')->insert(
            array(
                'fullname' => 'Rivaldo Bagus Soepardhy',
                'username' => 'aldobagus',
                'usertype' => 'Housingofficer',
                'email' => 'aldobagus@hotmail.co.id',
                'password' => '$2y$10$raEeBv7zHvNbISqH0bNiOegCjPfVFefJg7m5iNk6Yir0O24uu9QWa',
                
            )
        );
        DB::table('users')->insert(
            array(
                'fullname' => 'Wulandari Maharani',
                'username' => 'wulan',
                'usertype' => 'Applicant',
                'email' => 'wulan@gmail.com',
                'monthlyIncome' => '10000',
                'password' => '$2y$10$KLgd5f6Lf6hqx1Ts4UbEp.L1YWIBu.ghU.bSpmSNwy4/XF86qaUy6', 
            )
        );
    }
    public function down(){
        Schema::dropIfExists('users');
    }
}
