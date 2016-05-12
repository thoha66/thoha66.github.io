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
            $table->string('no_kp_guru')->nullable();
            $table->string('jenis_guru')->nullable(); //Tak boleh edit oleh guru. Hanya pentadbir yg boleh edit
            $table->string('guru_kelas')->nullable(); //Menjadi guru kelas di mana ?
            $table->string('nama_guru')->nullable();
            $table->string('no_tel_guru')->nullable();
            $table->string('no_hp_guru')->nullable();
            $table->date('tarikh_lahir_guru')->nullable();
            $table->string('alamat_guru')->nullable();
            $table->string('poskod_guru')->nullable();
            $table->string('email_guru')->nullable();
            $table->string('umur_guru')->nullable();
            $table->string('jantina_guru')->nullable();
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
