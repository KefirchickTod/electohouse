<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_orders', function (Blueprint $table) {
            $table->increments('id');

            $table->integer("user_id");

            $table->string('address');
            $table->string('user_email');
            $table->string("creat_at");

            $table->string("unique_user_code")->unique();

            $table->timestamps();
            $table->softDeletes();

            //$table->foreign("unique_user_code")->references("product_unique_user_code")->on("shop_order_products");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_orders');
    }
}
