<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stylists', function (Blueprint $table) {
            $table->increments('stylist_id');
            $table->string('stylist_name');
            $table->string('avatar', 255);
            $table->integer('age');
            $table->tinyInteger('brand_id');
            $table->tinyInteger('status');
            $table->timestamps();
            // $table->foreign('brand_id')
            //     ->references('brand_id')
            //     ->on('brands')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stylists');
    }
}
