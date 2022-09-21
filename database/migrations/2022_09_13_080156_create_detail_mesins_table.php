<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_mesins', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_mesin');
            $table->string('nama',50);
            $table->string('type',20);
            $table->date('latest_maintenance');
            $table->date('next_maintenance');
            $table->enum('condition',['very good','good','bad']);
            $table->integer('breakdown_possibility');
            $table->string('kode_mesin',10);
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
        Schema::dropIfExists('detail_mesins');
    }
};
