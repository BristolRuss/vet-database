<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyAnimalsAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animals', function (Blueprint $table) {
            // // create the owner_id column
            $table->bigInteger("owner_id")->unsigned()->default(1);

            // set up the foreign key constraint
            $table->foreign("owner_id")->references("id")->on("owners")->onDelete("cascade");
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
            $table->dropForeign(['owner_id']);
            $table->dropColumn("owner_id");
        });
    }
}
