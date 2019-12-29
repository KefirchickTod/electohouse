<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_lists', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('categories_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->integer('status');
            $table->integer('manufacture_id')->unsigned();


            $table->bigInteger("viewed")->unsigned()->default(0);


            $table->string('slug');
            $table->string('title');

            $table->text('description')->nullable();
            $table->text("short_text");

            $table->boolean('is_published')->default(false);

            $table->timestamp("published_at")->nullable();

            $table->timestamps();
            $table->softDeletes();


        });

        Schema::table('shop_lists', function (Blueprint $table){
            $table->foreign("author_id")->references("id")->on("users");
            $table->foreign("categories_id")->references("id")->on("shop_categories");
            $table->index("is_published");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_lists');
    }
}
