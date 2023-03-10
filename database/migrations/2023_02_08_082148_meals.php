<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function(Blueprint $table){
            $table->bigIncrements('id') ;
            $table->string('title') ;
            $table->integer('price') ;
            $table->string('image') ;
            $table->string('description') ;
            $table->timestamps() ;
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals') ;
    }
};
