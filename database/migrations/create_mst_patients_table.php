<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_patients', function (Blueprint $table) {
            $table->id();
            $table->string('karte_id')->comment('カルテ上のNo.');
            $table->string('patient_name')->comment('患者名');
            $tabel->string('patient_name_kana')->nullable()->comment('患者名カナ');
            $table->string('tel_1',11)->nullable()->comment('携帯電話番号');
            $table->string('tel_2',10)->nullable()->comment('固定電話番号');
            $table->string('email')->nullable()->comment('メールアドレス');
            $table->string('line_user_id')->nullable()->comment('ラインID');
            $table->date('birthday')->nullable()->comment('誕生日');
            $table->string('sex')->comment('性別');
            $table->integer('insur_class_id')->unsigned()->comment('保険区分ID');
            $table->foreign('insur_class_id')->references('id')->on('mst_insur_classes');
            $table->integer('insur_fee_id')->unsigned()->comment('保険料金ID');
            $table->foreign('insur_fee_id')->references('id')->on('mst_insur_fees');
            $table->integer('fee_structure_id')->unsigned()->comment('料金体系ID');
            $table->foreign('fee_structure_id')->references('id')->on('mst_fee_structures');
            $table->text('remarks')->nullable()->comment('備考');

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
        Schema::dropIfExists('mst_patients');
    }
}
