<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderViewportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_viewports', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> timestamps();
            $table -> string('property');
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
        Schema::dropIfExists('header_viewports');
    }
}
