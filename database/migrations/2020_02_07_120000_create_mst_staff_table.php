<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_staff', function (Blueprint $table) {
            $table->increments('id');

            $table->string('staff_name');
            $table->string('staff_name_kana')->nullable();

            $table->string('staff_tel',11);
            $table->string('staff_line_user_id')->nullable();

            $table->integer('treatable_flag')->unsigned();
            $table->text('introduction')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_staff');
    }
}
