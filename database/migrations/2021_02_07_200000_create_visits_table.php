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
            //$table->bigInteger('mst_patient_id')->unsigned()->comment('患者id,カルテNo.ではない');
            $table->foreignId('mst_patient_id')
                    ->constrained('mst_patients')
                    ->onDelete()
                    ->comment('患者ID,カルテNo.ではない');

            $table->date('visit_date')->comment('来院日');

            //$table->bigInteger('mst_staff_id')->unsigned()->comment('スタッフID');
            $table->foreignId('mst_staff_id')
                    ->constrained('mst_staff')
                    ->onDelete()
                    ->comment('スタッフID');

            //$table->bigInteger('visit_class_id')->unsigned()->comment('初再診');
            $table->foreignId('visit_class_id')
                    ->constrained('mst_visit_classes')
                    ->onDelete()
                    ->comment('初再診区分');

            //$table->bigInteger('insur_class_id')->unsigned()->comment('保険区分');
            $table->foreignId('insur_class_id')
                    ->constrained('mst_insur_classes')
                    ->onDelete()
                    ->comment('保険区分');

            //$table->bigInteger('insur_fee_id')->unsigned()->comment('保険料金');
            $table->foreignId('insur_fee_id')
                    ->constrained('mst_insur_fees')
                    ->onDelete()
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
