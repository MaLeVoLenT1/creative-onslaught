<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_keywords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table -> string('name',15) -> unqiue();
            $table -> boolean('is_active');
            $table -> string('pages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('header_keywords');
    }
}
