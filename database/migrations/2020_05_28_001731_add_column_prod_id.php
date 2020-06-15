<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnProdId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historic', function (Blueprint $table) {
            $table->Integer('prod_id')->unsigned()->after('id');
            $table->foreign('prod_id')->references('id')->on('immo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historic', function (Blueprint $table) {
            $table->dropForeign('[prod_id]');
            $table->dropColumn('prod_id');
        });
    }
}
