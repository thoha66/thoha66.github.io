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
            $table->string('no_kp_admin')->nullable();
            $table->string('nama_admin')->nullable();
            $table->string('no_tel_admin')->nullable();
            $table->string('no_hp_admin')->nullable();
            $table->date('tarikh_lahir_admin')->nullable();
            $table->string('alamat_admin')->nullable();
            $table->string('poskod_admin')->nullable();
            $table->string('email_admin')->nullable();
            $table->string('jantina_admin')->nullable();
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
