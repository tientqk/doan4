<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_donhang', function (Blueprint $table) {
            $table->increments('id');
         
            $table->datetime('ngaytao');

            $table->decimal('thanhtien');
            $table->integer('soluong');
            $table->integer('diachigiaohang');
            $table->integer('sdt');

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
        Schema::dropIfExists('tb_donhang');
    }
}
