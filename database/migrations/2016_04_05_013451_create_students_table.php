<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned(); //Fk
            $table->integer('parent_id')->unsigned(); //Fk
            $table->integer('classroom_id')->unsigned(); //Fk
            $table->string('no_surat_beranak')->nullable();
            $table->string('no_kp')->nullable();
            $table->string('nama')->nullable(); //Tak boleh edit oleh guru. Hanya pentadbir yg boleh edit
            $table->string('tingkatan')->nullable(); //Menjadi guru kelas di mana ?
            $table->string('no_kp_penjaga')->nullable();
            // $table->string('nama_penjaga')->nullable();
            // $table->string('alamat_penjaga')->nullable();
            // $table->string('poskod_penjaga')->nullable();
            // $table->date('no_tel_penjaga')->nullable();
            $table->string('alamat')->nullable();
            $table->string('poskod')->nullable();
            $table->string('email')->nullable();
            $table->string('umur')->nullable();
            $table->string('jantina')->nullable();
            $table->timestamps();

            $table->foreign('admin_id')
                  ->references('id')
                  ->on('admins');

            $table->foreign('parent_id')
                  ->references('id')
                  ->on('parents');

            $table->foreign('classroom_id')
                  ->references('id')
                  ->on('classrooms');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
