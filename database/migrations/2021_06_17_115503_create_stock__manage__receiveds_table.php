<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockManageReceivedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock__manage__receiveds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rbuyer');
            $table->string('rseason');
            $table->string('rstyle');
            $table->string('rgrnNo');
            $table->string('rcategory');
            $table->string('ritemType');
            $table->string('ritemCategory');
            $table->string('rcolor');
            $table->text('rdescription');
            $table->double('rquantity');
            $table->date('rdate');
            $table->integer('rrollCount');
            $table->text('rremark');
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
        Schema::dropIfExists('stock__manage__receiveds');
    }
}
