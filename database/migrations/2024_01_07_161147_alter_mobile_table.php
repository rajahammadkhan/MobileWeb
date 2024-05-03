<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('mobiles', function (Blueprint $table) {


            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')->on('mobile_brands')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('mobile_categories')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->bigInteger('status_id')->unsigned()->nullable();
            $table->foreign('status_id')->references('id')->on('mobile_status')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->bigInteger('operating_system_id')->unsigned()->nullable();
            $table->foreign('operating_system_id')->references('id')->on('mobile_operating_systems')->onUpdate('RESTRICT')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mobiles', function (Blueprint $table) {

            $table->dropForeign(['brand_id']);
            $table->dropColumn('brand_id');

            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');

            $table->dropForeign(['status_id']);
            $table->dropColumn('status_id');

            $table->dropForeign(['operating_system_id']);
            $table->dropColumn('operating_system_id');


        });
    }
};
