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
            $table->integer('code')->unique()->unsigned();
            $table->string('nature');
            $table->string('lib');
            $table->string('fournisseur');
            $table->string('serie');
            $table->string('affectation');
            $table->integer('dv')->nullable()->unsigned();
            $table->string('type');
            $table->integer('cout')->unsigned();
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
