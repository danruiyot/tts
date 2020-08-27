<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("note");
            $table->text("destinations");
            $table->text("highlights");
            $table->text("where_stay");
            $table->string("travel_style");
            $table->string("age_range");
            $table->string("number_of_days");
            $table->string("price");
            $table->text("what_included");
            $table->string("type")->nullable();
            $table->string("category")->nullable();
            $table->string("image")->nullable();
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
        Schema::dropIfExists('packages');
    }
}
