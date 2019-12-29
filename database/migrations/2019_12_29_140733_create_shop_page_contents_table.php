<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopPageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_page_contents', function (Blueprint $table) {
            $table->increments('id');

            $table->string("shop_page_content_code");
            $table->boolean("shop_page_content_status");
            $table->integer('shop_page_contents_author_id')->unsigned();
            $table->longText("content");

            $table->timestamps();
            $table->softDeletes();

        });
        Schema::table('shop_page_contents', function (Blueprint $table){
            $table->foreign('shop_page_contents_author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_page_contents');
    }
}
