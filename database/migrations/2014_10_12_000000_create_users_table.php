<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('usertype')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE users AUTO_INCREMENT = 2020100;");
        DB::table('users')->insert(
            array(
                'name' => 'Rivaldo Bagus Soepardhy',
                'username' => 'aldobagus',
                'usertype' => 'Housingofficer',
                'email' => 'aldobagus@hotmail.co.id',
                'password' => '12345678',
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'Wulandari Maharani',
                'username' => 'wulan',
                'usertype' => 'Applicant',
                'email' => 'wulan@gmail.com',
                'password' => '12345678',
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
        Schema::dropIfExists('users');
    }
}
