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
            $table->string('patient_name_kana')->nullable()->comment('患者名カナ');

            $table->string('tel_1',11)->nullable()->comment('携帯電話番号');
            $table->string('tel_2',10)->nullable()->comment('固定電話番号');

            $table->string('email')->nullable()->comment('メールアドレス');
            $table->string('line_user_id')->nullable()->comment('ラインID');

            $table->date('birthday')->nullable()->comment('誕生日');
            $table->string('sex')->comment('性別');

            //$table->bigInteger('insur_class_id')->unsigned()->comment('保険区分ID');
            $table->foreignId('insur_class_id')
                    ->constrained('mst_insur_classes')
                    ->onDelete('cascade')
                    ->comment('保険区分ID');

            //$table->bigInteger('insur_fee_id')->unsigned()->comment('保険料金ID');
            $table->foreignId('insur_fee_id')
                    ->constrained('mst_insur_fees')
                    ->onDelete()
                    ->comment('保険料金ID');

            //$table->bigInteger('fee_structure_id')->unsigned()->comment('料金体系ID');
            $table->foreignId('fee_structure_id')
                    ->constrained('mst_fee_structures')
                    ->onDelete()
                    ->comment('料金体系ID');

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
