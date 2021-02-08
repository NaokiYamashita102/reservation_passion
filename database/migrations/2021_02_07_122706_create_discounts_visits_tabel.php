<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsVisitsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts_visits_tabel', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('visit_id')->unsigned()->comment('来院ID');
            $table->foreign('visit_id')
                    ->references('id')
                    ->on('visits');

            $table->bigInteger('discount_id')->unsigned()->comment('割引ID');
            $table->foreign('discount_id')
                    ->references('id')
                    ->on('mst_discounts');

            $table->bigInteger('pay_status_id')->unsigned()->comment('支払ID');
            $table->foreign('pay_status_id')
                    ->references('id')
                    ->on('mst_patients');

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
        Schema::dropIfExists('discounts_visits_tabel');
    }
}
