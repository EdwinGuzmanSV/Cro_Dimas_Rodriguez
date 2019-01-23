<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnecdotaTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anecdota_tag', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('anecdota_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            
            $table->timestamps();

            //relation
            $table->foreign('anecdota_id')->references('id')->on('anecdotas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('tag_id')->references('id')->on('tags')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anecdota_tag');
    }
}
