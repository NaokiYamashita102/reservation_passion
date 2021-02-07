<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_treatments', function (Blueprint $table) {
          $table->id();
          $table->string('treatment_name')->comment('治療名');
          $table->text('treatment_detail')->nullable()->comment('治療詳細');
          $table->string('color')->comment('表示色');
          $table->integer('time_frame')->comment('コマ数');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_treatments');
    }
}
