<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('events', function(Blueprint $table) {
            $table->increments('id');
            $table->string('event_name');
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('capacity');
            $table->integer('images_id')->nullable()->unsigned()->index();
            $table->integer('users_id')->unsigned()->index();
            $table->timestamps();
            
            $table->foreign('images_id')
                  ->references('id')
                  ->on('images')
                  ->onDelete('cascade');
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });

        Schema::create('events_tags', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('events_id')->unsigned()->index();
            $table->integer('users_id')->unsigned()->index();

            $table->foreign('events_id')
                  ->references('id')
                  ->on('events')
                  ->onDelete('cascade');
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });

        Schema::create('events_comments', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('events_id')->unsigned()->index();
            $table->integer('users_id')->unsigned()->index();
            $table->text('events_comments');
            $table->timestamps();
            
            $table->foreign('events_id')
                  ->references('id')
                  ->on('events')
                  ->onDelete('cascade');
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('events');
        
        Schema::dropIfExists('events_tags');
        
        Schema::dropIfExists('events_comments');
    }
}
