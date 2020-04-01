<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarkCollectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmark_collection', function (Blueprint $table) {
            $table->bigInteger('bookmark_id')->unsigned();
            $table->bigInteger('collection_id')->unsigned();

            $table->foreign('bookmark_id')->references('id')->on('bookmarks');
            $table->foreign('collection_id')->references('id')->on('collections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookmark_collection');
    }
}
