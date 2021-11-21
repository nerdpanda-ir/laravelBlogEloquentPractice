<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->text('comment')
                ->collation('utf8_general_ci');

            $table->boolean('active')
                ->default(false)
                ->index();

            $table->bigInteger('user_id')
                ->unsigned();

            $table->bigInteger('article_id')
                ->unsigned();

            $table->timestamps();
            $table->dateTime('published_at')
                ->index()
                ->nullable();


            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->foreign('article_id')
                ->on('articles')
                ->references('id')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('comments');
    }
}
