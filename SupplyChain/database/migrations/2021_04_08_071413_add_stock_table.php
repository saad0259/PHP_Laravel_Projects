<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('subitem_id')->unsigned();
            $table->integer('dealer_id')->unsigned();
            $table->decimal('receive_quantity', 8, 2)->nullable();
            $table->decimal('receive_at', 8, 2)->nullable();
            $table->decimal('sold_quantity', 8, 2)->nullable();
            $table->decimal('sold_at', 8, 2)->nullable();
            $table->integer('unit_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');

    }
}
