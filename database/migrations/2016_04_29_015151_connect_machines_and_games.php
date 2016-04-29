<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectMachinesAndGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {

            $table->integer('machine_id')->unsigned();

            # This field `machine_id` is a foreign key that connects to the `id` field in the `machines` table
            $table->foreign('machine_id')->references('id')->on('machines');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            $table->dropForeign('games_machine_id_foreign');

            $table->dropColumn('machine_id');
        });
    }
}
