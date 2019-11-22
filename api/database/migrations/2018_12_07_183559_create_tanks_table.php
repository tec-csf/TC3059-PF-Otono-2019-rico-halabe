<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('capacity')->default(0);
            $table->smallInteger('width')->default(0);
            $table->smallInteger('height')->default(0);
            $table->smallInteger('depth')->default(0);
            $table->smallInteger('fish_sweet')->default(0);
            $table->smallInteger('fish_salty')->default(0);
            $table->smallInteger('medium_ornaments')->default(0);
            $table->smallInteger('big_ornaments')->default(0);
            $table->string('color')->default("");
            $table->boolean('cabinet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanks');
    }
}
