<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Book extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->double('price');
            $table->string('author');
            $table->string('image');
            $table->bigInteger('cat_id')->unsigned();
            // $table->bigInteger('user_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        
            $table->foreign('cat_id')
                ->references('id')->on('category')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->foreign('user_id')
            //     ->references('id')->on('users')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
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
