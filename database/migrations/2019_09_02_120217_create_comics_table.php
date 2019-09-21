<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('img_url')->nullable();

            $table->string('comic_name')->nullable();
            $table->string('writer_name')->nullable();
            $table->string('publisher')->nullable();
            $table->string('publication_magazine')->nullable();

            $table->string('publish_number')->nullable();
            $table->string('publish_status')->nullable();
            $table->string('duration')->nullable();
            $table->string('amazon_url')->nullable();

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
        Schema::dropIfExists('comics');
    }
}
