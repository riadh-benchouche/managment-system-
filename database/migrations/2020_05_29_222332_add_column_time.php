<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immo', function (Blueprint $table) {
            $table->date('time_trans')->nullable();
            $table->date('time_rep')->nullable();
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
            $table->dropColumn('time_trans');
            $table->dropColumn('time_rep');
        });
    }
}
