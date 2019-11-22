<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTankOrnamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tank_ornaments', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('tank_id');
          $table->unsignedInteger('ornament_id');
          $table->timestamps();


          $table->foreign('tank_id')
                ->references('id')->on('tanks')
                ->onDelete('cascade');
          $table->foreign('ornament_id')
                ->references('id')->on('ornaments')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tank_ornaments');
    }
}
