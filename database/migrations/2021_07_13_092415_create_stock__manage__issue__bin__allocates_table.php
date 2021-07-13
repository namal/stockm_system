<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockManageIssueBinAllocatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock__manage__issue__bin__allocates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('isissuedTotalQuantity');
            $table->string('isallocatedRack');
            $table->string('isallocatedBin');
            $table->string('isissuedBatchNo');
            $table->double('isissuedQuantity');
            $table->integer('isissuedRollsCount');
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
        Schema::dropIfExists('stock__manage__issue__bin__allocates');
    }
}
