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
            $table->decimal('available_stock', 10)->nullable();
            $table->decimal('receive_quantity', 10)->nullable();
            $table->decimal('receive_at', 10)->nullable();
            $table->decimal('sold_quantity', 10)->nullable();
            $table->decimal('sold_at', 10)->nullable();
            $table->decimal('gov_price', 10)->nullable();
            $table->integer('unit_id')->unsigned()->nullable();
            $table->date('date')->nullable()->default(new DateTime());
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
