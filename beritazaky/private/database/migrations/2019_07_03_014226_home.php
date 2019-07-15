<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Home extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table){
        $table->bigIncrements('id');
        $table->string('footer',250);
        $table->integer('numbering')->default(5);
        $table->string('logo',100);
        $table->string('slider1',100);
        $table->string('slider2',100);
        $table->string('slider3',100);
        $table->integer('deleted')->default(0);
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
        //
    }
}
