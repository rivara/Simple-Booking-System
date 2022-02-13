<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landLord', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            // define foreign key
            $table->foreignId('user_id')
            ->reference('id')
            ->on('users')
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
        Schema::dropIfExists('landLord');
    }
}
