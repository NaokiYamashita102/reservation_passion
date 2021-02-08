<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mst_patient_id')->unsigned()->comment('患者id,カルテNo.ではない');
            $table->foreign('mst_patient_id')
                    ->references('id')
                    ->on('mst_patients')
                    ->comment('患者ID,カルテNo.ではない');

            $table->date('visit_date')->comment('来院日');

            // $table->integer('mst_staff_id')->unsigned()->comment('スタッフID');
            // $table->foreign('mst_staff_id')
            //         ->references('id')
            //         ->on('mst_staff')
            //         ->comment('スタッフID');

            $table->unsignedBigInteger('visit_class_id')->comment('初再診');
            $table->foreign('visit_class_id')
                    ->references('id')
                    ->on('mst_visit_classes')
                    ->comment('初再診区分');

            $table->unsignedBigInteger('insur_class_id')->comment('保険区分');
            $table->foreign('insur_class_id')
                    ->references('id')
                    ->on('mst_insur_classes')
                    ->comment('保険区分');

            $table->unsignedBigInteger('insur_fee_id')->comment('保険料金');
            $table->foreign('insur_fee_id')
                    ->references('id')
                    ->on('mst_insur_fees')
                    ->comment('保険料金');

            $table->integer('payment_amounts')->unsigned()->comment('総支払額');
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
        Schema::dropIfExists('visits');
    }
}
