<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->float("weight", 10, 2)->nullable()->change();
            $table->float("height", 10, 2)->nullable()->change();
            $table->boolean("biteyness")->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->float("weight", 10, 2)->change();
            $table->float("height", 10, 2)->change();
            $table->boolean("biteyness")->change();
        });
    }
}
