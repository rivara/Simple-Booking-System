<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartamentsFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartaments_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feature_id')->nullable();   
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');        
            $table->unsignedBigInteger('apartament_id')->nullable();
            $table->foreign('apartament_id')->references('id')->on('apartaments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartaments_features');
    }
}
