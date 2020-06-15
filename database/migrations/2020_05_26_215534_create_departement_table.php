<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departement', function (Blueprint $table) {
            $table->Increments('departemenet_id');
            $table->string('departemenet_name');
            $table->integer('departemenet_number_service');
            $table->string('departemenet_boss');
            $table->timestamps();
        });
    }


    //         $table->integer('service_id')->unsigned()->after('departement_id');
    //        $table->foreign('service_id')->references('service_id')->on('service');
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departement');

    }
}
