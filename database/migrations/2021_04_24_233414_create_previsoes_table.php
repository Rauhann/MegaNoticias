<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrevisoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previsoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('data');
            $table->string('codigo');
            $table->string('temperatura_min');
            $table->string('temperatura_max');
            $table->timestamp('expira_em');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('previsoes');
    }
}
