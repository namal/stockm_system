<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockManageReceiveBinAllocatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock__manage__receive__bin__allocates', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->id('');
            $table->double('rereceivedTotalQuantity');
            $table->string('reallocatedRack');
            $table->string('reallocatedBin');
            $table->string('rereceivedBatchNo');
            $table->double('rereceivedQuantity');
            $table->integer('rereceivedRollsCount');
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
        Schema::dropIfExists('stock__manage__receive__bin__allocates');
    }
}
