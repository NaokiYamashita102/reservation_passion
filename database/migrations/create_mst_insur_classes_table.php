<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstInsurClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_insur_classes', function (Blueprint $table) {
          //マスタ保険区分テーブル
            $table->id();
            // $table->integer('insur_class_id')->comment('保険区分ID');
            $table->string('insur_class_name')->comment('保険区分名');
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
        Schema::dropIfExists('insurances');
    }
}
