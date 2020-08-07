<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("phone");
            $table->string("guest_name");
            $table->string("pick_up_date");
            $table->string("pick_up_time");
            $table->string("location");
            $table->string("addtional_services");
            $table->string("remark");
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
        Schema::dropIfExists('transports');
    }
}
