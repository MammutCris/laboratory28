<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('title_en')->nullable();
	        $table->string('title_ru')->nullable();
	        $table->string('title_uk')->nullable();
	        $table->string('text_en')->nullable();
	        $table->string('text_ru')->nullable();
	        $table->string('text_uk')->nullable();
	        $table->string('image')->nullable();
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
        Schema::dropIfExists('quotes');
    }
}
