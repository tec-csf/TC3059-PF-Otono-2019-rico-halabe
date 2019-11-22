<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid');
            $table->unsignedInteger('tank_id')->nullable();
            $table->unsignedInteger('water_id')->nullable();
            $table->unsignedInteger('floor_id')->nullable();
            $table->unsignedInteger('decoration_id')->nullable();
            $table->unsignedInteger('ornament_id')->nullable();
            $table->unsignedInteger('fish_id')->nullable();
            $table->unsignedInteger('liters')->nullable();
            $table->boolean('package')->nullable();
            $table->boolean('rent')->default(false);
            $table->unsignedInteger('client_id')->nullable();
            $table->unsignedInteger('price_id')->nullable();
            $table->timestamps();


            $table->foreign('tank_id')
                  ->references('id')->on('tanks')
                  ->onDelete('cascade');
            $table->foreign('water_id')
                  ->references('id')->on('basic_materials')
                  ->onDelete('cascade');
            $table->foreign('floor_id')
                  ->references('id')->on('basic_materials')
                  ->onDelete('cascade');
            $table->foreign('decoration_id')
                  ->references('id')->on('decorations')
                  ->onDelete('cascade');
            $table->foreign('ornament_id')
                  ->references('id')->on('ornaments')
                  ->onDelete('cascade');
            $table->foreign('fish_id')
                  ->references('id')->on('fish')
                  ->onDelete('cascade');
            $table->foreign('client_id')
                  ->references('id')->on('clients')
                  ->onDelete('cascade');
            $table->foreign('price_id')
                  ->references('id')->on('prices')
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
        Schema::dropIfExists('sessions');
    }
}
