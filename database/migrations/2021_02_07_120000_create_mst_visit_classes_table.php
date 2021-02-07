<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstVisitClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_visit_classes', function (Blueprint $table) {
            $table->id();
            $table->string('visit_class_name')->comment('来院区分名');
            $table->integer('visit_class_fee')->unsigned()->comment('来院区分料金(初再診料)');
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
        Schema::dropIfExists('mst_visit_classes');
    }
}
