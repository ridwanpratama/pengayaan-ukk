<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('nama',100);
            $table->string('jk',10);
            $table->string('temp_lahir',25);
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('asal_sekolah',50);
            $table->string('kelas',10);
            $table->string('jurusan',50);
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
        Schema::dropIfExists('pendaftar');
    }
}
