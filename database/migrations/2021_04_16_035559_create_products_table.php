<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('masp');
            $table->string('tensp');//text
            $table->string('hinhanh');// hinhanh
            $table->integer('gia');
            $table->integer('soluong');
            $table->string('mota');
            $table->unsignedBigInteger('cat_id');

            $table->foreign('cat_id')->references('id')->on('danhmuc');
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
        Schema::dropIfExists('products');
    }
}
