<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            /* cara 1 membuat foreign
             $table->bigInteger('camp_id')->unsigned();
             $table->foreign('camp_id')->references('id')->on('camps')->onUpdate('cascade')->onDelete('restrict'); */

            //  cara 2 membuat foreign
            $table->foreignId('camp_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('camp_benefits');
    }
}
