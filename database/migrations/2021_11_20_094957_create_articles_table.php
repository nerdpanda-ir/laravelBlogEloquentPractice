<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->string('slug',100)
                ->unique()
                ->collation('utf8_general_ci');

            $table->string('title',100)
                ->index()
                ->collation('utf8_general_ci');

            $table->string('summary',255)
                ->collation('utf8_general_ci');

            $table->longText('body')
                ->collation('utf8_general_ci');

            $table->bigInteger('user_id')
                ->unsigned();

            $table->boolean('active')
                ->default(false)
                ->index();

            $table->timestamps();
            $table->dateTime('published_at')
                ->nullable()
                ->index();


            $table->foreign('user_id')
                ->on('users')->references('id')
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
        Schema::dropIfExists('articles');
    }
}
