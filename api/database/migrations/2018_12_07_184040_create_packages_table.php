<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->unsignedInteger('tank_id');
            $table->string('water_type');
            $table->unsignedInteger('floor_id');
            $table->unsignedInteger('decoration_id');
            $table->unsignedInteger('ornament_id_1');
            $table->unsignedInteger('ornament_id_2')->nullable();
            $table->unsignedInteger('ornament_id_3')->nullable();
            $table->unsignedInteger('fish_id');
            $table->timestamps();

            $table->foreign('tank_id')
                  ->references('id')->on('tanks')
                  ->onDelete('cascade');

            $table->foreign('floor_id')
                  ->references('id')->on('basic_materials')
                  ->onDelete('cascade');

            $table->foreign('fish_id')
                  ->references('id')->on('fish')
                  ->onDelete('cascade');

            $table->foreign('decoration_id')
                  ->references('id')->on('decorations')
                  ->onDelete('cascade');

            $table->foreign('ornament_id_1')
                  ->references('id')->on('ornaments')
                  ->onDelete('cascade');

            $table->foreign('ornament_id_2')
                  ->references('id')->on('ornaments')
                  ->onDelete('cascade');

            $table->foreign('ornament_id_3')
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
        Schema::dropIfExists('packages');
    }
}
