<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnServiceId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departement', function (Blueprint $table) {
            $table->integer('service_id')->unsigned()->after('departemenet_id');
            $table->foreign('service_id')->references('service_id')->on('service');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departement', function (Blueprint $table) {
                $table->dropForeign('[service_id]');
                $table->dropColumn('service_id');
        });
    }
}
