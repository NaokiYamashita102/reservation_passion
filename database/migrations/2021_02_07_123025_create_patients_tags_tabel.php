<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTagsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_tags_tabel', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('patient_id')->unsigned()->comment('患者ID');
            $table->bigInteger('tag_id')->unsigned()->comment('タグID');
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
        Schema::dropIfExists('patients_tags_tabel');
    }
}
