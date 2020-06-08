<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_collections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('coordinates');
            $table->string('balloonContent');
            $table->string('clusterCaption');
            $table->string('hintContent');
            $table->string('iconCaption');
            $table->string('preset');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_collections');
    }
}
