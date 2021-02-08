<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('tel',11)->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('mst_cource_id')->nullable()->unsigned();
            $table->foreign('mst_cource_id')->references('id')->on('mst_cources');
            $table->bigInteger('mst_staff_id')->unsigned();
            $table->foreign('mst_staff_id')->references('id')->on('mst_staffs');
            $table->bigInteger('mst_time_id')->unsigned();
            $table->foreign('mst_time_id')->references('id')->on('mst_times');
            $table->date('schedule_date');
            $table->bigInteger('mst_status_id')->default(1)->unsigned();
            $table->foreign('mst_status_id')->references('id')->on('mst_statuses');

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
        Schema::dropIfExists('schedules');
    }
}
