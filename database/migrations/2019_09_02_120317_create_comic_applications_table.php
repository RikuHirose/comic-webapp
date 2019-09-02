<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('comic_id')->unique()->unsigned()->index()->nullable();
            $table->bigInteger('application_id')->unique()->unsigned()->index();

            $table->foreign('comic_id')->references('id')->on('comics')->onDelete('cascade');
            $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');

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
        Schema::dropIfExists('comic_application');
    }
}
