<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immo', function (Blueprint $table) {

                $table->integer('service_id')->unsigned()->after('id');
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
        Schema::table('immo', function (Blueprint $table) {
            $table->dropForeign('[service_id]');
            $table->dropColumn('service_id');
        });
    }
}
