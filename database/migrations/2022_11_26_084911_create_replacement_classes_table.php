<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReplacementClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replacement_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_mata_kuliah')->nullable();
            $table->string('kelas')->nullable();
            $table->date('jadwal_tanggal_yang_akan_di_replace')->nullable();
            $table->dateTime('jadwal_jam_kuliah')->nullable();
            $table->date('tanggal_replacement')->nullable();
            $table->string('jam_replacement')->nullable();
            $table->string('alasan_melakukan_replacement_class')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('replacement_classes');
    }
}
