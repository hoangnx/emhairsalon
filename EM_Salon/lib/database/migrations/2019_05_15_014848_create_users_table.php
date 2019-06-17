<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name', 255);
            $table->string('password');
            $table->string('avatar', 255);
            $table->string('email');
            $table->string('address', 255);
            $table->string('phone');
            $table->tinyInteger('user_level');
            $table->tinyInteger('brand_id');
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
        Schema::dropIfExists('users');
    }
}
