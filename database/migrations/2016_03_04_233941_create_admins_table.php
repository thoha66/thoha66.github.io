<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_kp')->nullable();
            $table->string('nama')->nullable();
            $table->string('no_tel')->nullable();
            $table->string('no_hp')->nullable();
            $table->date('tarikh_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('poskod')->nullable();
            $table->string('email')->nullable();
            $table->string('jantina')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admins');
    }
}
