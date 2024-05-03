<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_general_info', function (Blueprint $table) {

            $table->bigIncrements('id')->index();

            $table->bigInteger('mobile_id')->unsigned()->nullable();
            $table->foreign('mobile_id')->references('id')->on('mobiles')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->smallInteger('res_width')->nullable();
            $table->smallInteger('res_height')->nullable();
            $table->smallInteger('res_ppi')->nullable();

            $table->double('size')->nullable()->comment('like 6.6 inches');
            $table->date('release_date')->nullable();
            $table->string('os')->nullable();
            $table->string('ui')->nullable();
            $table->string('audio')->nullable();
            $table->string('torch')->nullable();
            $table->string('browser')->nullable();

            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->bigInteger('updated_by')->unsigned()->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->bigInteger('deleted_by')->unsigned()->nullable();
            $table->foreign('deleted_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->softDeletes()->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobile_general_info');
    }
};
