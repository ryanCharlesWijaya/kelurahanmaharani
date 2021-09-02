<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('owner_nik');
            $table->string('kode_dokumen')->unique();
            $table->string('jenis_dokumen');
            $table->text('keterangan')->nullable();
            $table->string('file_name');
            $table->timestamps();

            $table->index('user_id');
            $table->index('owner_nik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arsips');
    }
}
