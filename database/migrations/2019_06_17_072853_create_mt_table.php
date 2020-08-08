<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt', function (Blueprint $table) {
            $table->bigIncrements('mid');
            $table->string('mname');
            $table->string('mcategory');
            $table->string('mlanguage');
            $table->string('mdescription');
            $table->string('mrate');
            $table->string('mreview');
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
        Schema::dropIfExists('mt');
    }
}
