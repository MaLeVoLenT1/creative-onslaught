<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table -> integer('customer_id')->unsigned();
            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');

            $table->string('name');
            $table->string('serial_number');
            $table->string('PN');
            $table->string('series_number');
            $table->string('power');
            $table->string('volts');
            $table->string('frequency');
            $table->string('approvals');
            $table->string('flow_system_number');
            $table->string('design_status');
            $table->string('column_id');
            $table->string('detector');
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
        Schema::dropIfExists('products');
    }
}
