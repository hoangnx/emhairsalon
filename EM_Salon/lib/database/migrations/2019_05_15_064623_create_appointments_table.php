<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('app_id');
            $table->string('app_date');
            $table->string('app_time');
            $table->integer('app_stylist');
            $table->integer('app_cus_id');
            $table->string('app_status');
            $table->timestamps();
            // $table->foreign('app_stylist')
            //     ->references('stylist_id')
            //     ->on('stylists')
            //     ->onDelete('cascade');
            // $table->foreign('app_cus_id')
            //     ->references('cus_id')
            //     ->on('customers')
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
        Schema::dropIfExists('appointments');
    }
}
