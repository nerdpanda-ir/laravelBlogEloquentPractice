<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleThumbnailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_thumbnails', function (Blueprint $table) {
            $table->id();

            $table->string('thumbnail');
            $table->string('alt',100)
                ->nullable()
                ->collation('utf8_general_ci');

            $table->bigInteger('article_id')
                ->unsigned();

            $table->timestamps();

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
        Schema::dropIfExists('article_thumbnails');
    }
}
