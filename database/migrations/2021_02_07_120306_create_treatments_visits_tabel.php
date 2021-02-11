<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsVisitsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments_visits_tabel', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('visit_id')->unsigned()->comment('来院ID');
            $table->foreign('visit_id')
                    ->references('id')
                    ->on('visits');

            $table->bigInteger('treatment_id')->unsigned()->comment('治療ID');
            $table->foreign('treatment_id')
                    ->references('id')
                    ->on('mst_treatments');

            $table->bigInteger('pay_status_id')->unsigned()->comment('支払ID');
            $table->foreign('pay_status_id')
                    ->references('id')
                    ->on('mst_pay_statuses');

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
        Schema::dropIfExists('treatments_visits_tabel');
    }
}
