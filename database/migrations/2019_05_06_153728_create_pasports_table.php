<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasports', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('iduser');
            $table->String('kantor');
            $table->date('tgl');
            $table->String('waktu');
            $table->String('jenis');
            $table->String('kode');                        
            $table->integer('biaya');
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
        Schema::dropIfExists('pasports');
    }
}
