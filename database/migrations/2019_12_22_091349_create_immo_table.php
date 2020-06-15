<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immo', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('prod_nature');
            $table->string('prod_name');
            $table->string('prod_prov');
            $table->string('prod_serie');
            $table->integer('prod_service');
            $table->integer('prod_lifetime')->nullable()->unsigned();
            $table->string('prod_type');
            $table->integer('prod_coast')->unsigned();
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
        Schema::dropIfExists('immo');
    }
}
