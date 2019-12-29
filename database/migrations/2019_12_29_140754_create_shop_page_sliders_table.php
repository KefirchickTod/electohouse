<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopPageSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_page_sliders', function (Blueprint $table) {
            $table->increments('id');

            $table->string("shop_page_slider_code");
            $table->boolean("shop_page_slider_status");
            $table->integer('author_id')->unsigned();
            $table->integer("product_image_id");
            $table->longText("comment");

            $table->timestamps();
            $table->softDeletes();

        });
        Schema::table('shop_page_sliders', function (Blueprint $table){
            $table->foreign('author_id')->references('id')->on('users');
          //  $table->foreign('product_image_id')->references('id')->on('shop_images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_page_sliders');
    }
}
