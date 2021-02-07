<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTreatmentsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits_treatments_tabel', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('visit_id')->unsigned()->comment('来院ID');
            $table->bigInteger('treatment_id')->unsigned()->comment('治療ID');
            $table->bigInteger('pay_status_id')->unsigned()->comment('支払ID');
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
        Schema::dropIfExists('visits_treatments_tabel');
    }
}
