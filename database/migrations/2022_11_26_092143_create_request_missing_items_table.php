<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestMissingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_missing_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('missing_item_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('missting_item_status_id')->nullable();
            $table->dateTime('requested_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('request_missing_items');
    }
}
