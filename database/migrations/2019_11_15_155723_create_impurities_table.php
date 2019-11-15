<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpuritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impurities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table -> integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
            $table->string('name')->nullable();
            $table->string('PPM');
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
        Schema::dropIfExists('impurities');
    }
}