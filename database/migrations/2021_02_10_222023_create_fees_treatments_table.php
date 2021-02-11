<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_treatments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('insur_class_id')->unsigned()->comment('保険区分');
            $table->foreign('insur_class_id')
                    ->references('id')
                    ->on('mst_insur_classes');

            $table->bigInteger('fee_structure_id')->unsigned()->comment('料金体系');
            $table->foreign('fee_structure_id')
                    ->references('id')
                    ->on('mst_fee_structures');

            $table->bigInteger('treatment_id')->unsigned()->comment('治療コース');
            $table->foreign('treatment_id')
                    ->references('id')
                    ->on('mst_treatments');

            $table->bigInteger('treatment_fee_id')->unsigned()->comment('治療料金');
            $table->foreign('treatment_fee_id')
                    ->references('id')
                    ->on('mst_treat_fees');

            $table->unique(['insur_class_id','fee_structure_id','treatment_id'],'unique_treat_fee');


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
        Schema::dropIfExists('fees_treatments');
    }
}
