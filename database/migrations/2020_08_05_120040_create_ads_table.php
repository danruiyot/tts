<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string("ad_name");
            $table->text("description");
            $table->integer("price");
            $table->string("location")->nullable();
            $table->string("country")->nullable();
            $table->integer("rating")->nullable();
            $table->integer("link")->nullable();
            $table->string("image")->nullable();
            $table->date('starts')->nullable();
            $table->date('ends')->nullable();

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
        Schema::dropIfExists('ads');
    }
}
