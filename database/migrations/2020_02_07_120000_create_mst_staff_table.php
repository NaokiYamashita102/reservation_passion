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
        Schema::create('mst_staffs', function (Blueprint $table) {
            $table->id();

            $table->string('staff_name',20)->comment('スタッフ名');
            $table->string('staff_name_kana',20)->nullable()->comment('スタッフ名カナ');

            $table->string('staff_tel',11)->comment('スタッフ携帯番号');
            $table->string('staff_line_user_id')->nullable()->comment('スタッフLINEID');

            $table->integer('treatable_flag')->unsigned()->comment('施術可能フラグ');
            $table->text('introduction')->nullable()->comment('スタッフ紹介');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_staffs');
    }
}
