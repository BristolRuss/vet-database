<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title', 20)->nullable();
            $table->string('name', 100);
            $table->string('address_line_1', 100);
            $table->string('address_line_2', 100)->nullable();
            $table->string('postcode', 15);
            $table->string('city', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
