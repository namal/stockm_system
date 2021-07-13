<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockManageIssuedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock__manage__issueds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ibuyer');
            $table->string('iseason');
            $table->string('istyle');
            $table->string('idelvDate');
            $table->string('igrnNo');
            $table->string('icategory');
            $table->string('iitemType');
            $table->string('iitemCategory');
            $table->string('icolor');
            $table->text('idescription');
            $table->double('iquantity');
            $table->date('idate');
            $table->integer('irollCount');
            $table->text('iremark');
            $table->timestamps();
            //14
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock__manage__issueds');
    }
}
