<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopRaitingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_raitings', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string("unique_user_code")->unique();
            $table->integer("raitings_count")->unsigned();
            $table->integer('product_id')->unsigned();
            $table->index("raitings_count");
            $table->timestamps();
        });
//        Schema::table('shop_raitings', function (Blueprint $table){
//            $table->foreign('product_id')->references('id')->on('product_lists');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_raitings');
    }
}
