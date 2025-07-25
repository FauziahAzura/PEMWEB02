<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelurahansTable extends Migration
{
    public function up()
    {
        Schema::create('kelurahans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('kec_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kelurahans');
    }
}
