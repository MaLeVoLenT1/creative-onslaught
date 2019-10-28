<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table -> string('author', 15)-> unqiue();
            $table -> string('description')->nullable();
            $table -> boolean('is_active')->default(true);
            $table -> string('icon');
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
        Schema::dropIfExists('header_information');
    }
}
