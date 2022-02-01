<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipApartamentToFeatureTable extends Migration
{
    public function up()
    {
        Schema::table('feature', function (Blueprint $table) {
            $table->foreign('feature_id','idfeature_fk_252968')->references('id')->on('apartament');
         
        });
    }
}
