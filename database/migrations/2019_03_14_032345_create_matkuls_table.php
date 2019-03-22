<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatkulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkuls', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->string('kodematkul', 10);
            $table->primary('kodematkul');
            $table->string('namamatkul',100);
            $table->string('kelas', 1);
            $table->string('nipdosenpengajar', 10)->index();
            $table->timestamps();
        });

        Schema::table('matkuls', function($table){
            $table->foreign('nipdosenpengajar')
            ->references('nip')
            ->on('dosens')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkuls');
    }
}
