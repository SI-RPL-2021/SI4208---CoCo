<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function(Blueprint $table){
            $table->increments('id');
            $table->text('url');
        });

        DB::table('images')->insert(
            array(
                'url' => 'profile-images/no-images.jpg'
            )
        );

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('images_id')->unsigned()->index();
            $table->string('bio');

            $table->unique(array('username','email'));

            $table->foreign('images_id')
                  ->references('id')
                  ->on('images')
                  ->onDelete('cascade');
        });

        Schema::create('posts', function(Blueprint $table) {
            $table->increments('id');
            $table->text('story');
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

        Schema::create('tags', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('posts_id')->unsigned()->index();
            $table->integer('users_id')->unsigned()->index();

            $table->foreign('posts_id')
                  ->references('id')
                  ->on('posts')
                  ->onDelete('cascade');
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });

        Schema::create('comments', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('posts_id')->unsigned()->index();
            $table->integer('users_id')->unsigned()->index();
            $table->text('comments');
            $table->timestamps();
            
            $table->foreign('posts_id')
                  ->references('id')
                  ->on('posts')
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
        Schema::dropIfExists('images');
        
        Schema::dropIfExists('users');
        
        Schema::dropIfExists('posts');
        
        Schema::dropIfExists('tags');
        
        Schema::dropIfExists('comments');
    }
}
