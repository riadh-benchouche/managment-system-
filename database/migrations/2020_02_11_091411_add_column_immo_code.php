<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnImmoCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transfert', function (Blueprint $table) {
            $table->integer('immo_code')->unsigned()->after('code');
            $table->foreign('immo_code')->references('code')->on('immo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transfert', function (Blueprint $table) {
            $table->dropForeign('[immo_code]');
            $table->dropColumn('immo_code');
        });
    }
}
