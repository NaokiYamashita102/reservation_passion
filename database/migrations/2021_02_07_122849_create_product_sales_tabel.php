<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSalesTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sales_tabel', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('visit_id')->unsigned()->comment('来院ID');
            $table->foreign('visit_id')
                    ->references('id')
                    ->on('visits');

            $table->bigInteger('product_id')->unsigned()->comment('商品ID');
            $table->foreign('product_id')
                    ->references('id')
                    ->on('mst_products');

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
        Schema::dropIfExists('product_sales_tabel');
    }
}
