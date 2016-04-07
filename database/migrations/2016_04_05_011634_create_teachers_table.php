<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned(); //FK
            $table->string('no_kp')->nullable();
            $table->string('jenis_guru')->nullable(); //Tak boleh edit oleh guru. Hanya pentadbir yg boleh edit
            $table->string('guru_kelas')->nullable(); //Menjadi guru kelas di mana ?
            $table->string('nama')->nullable();
            $table->string('no_tel')->nullable();
            $table->string('no_hp')->nullable();
            $table->date('tarikh_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('poskod')->nullable();
            $table->string('email')->nullable();
            $table->string('umur')->nullable();
            $table->string('jantina')->nullable();
            $table->timestamps();

            //Foreign Key Constraints
            $table->foreign('admin_id')
                  ->references('id')
                  ->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teachers');
    }
}
