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
        Schema::create('mobile_memory_info', function (Blueprint $table) {

            $table->bigIncrements('id')->index();

            $table->bigInteger('mobile_id')->unsigned()->nullable();
            $table->foreign('mobile_id')->references('id')->on('mobiles')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->boolean('card_supported')->nullable();
            $table->smallInteger('supported_card_size')->nullable();
            $table->smallInteger('ram_1')->nullable();
            $table->smallInteger('ram_2')->nullable();
            $table->smallInteger('built_in_memory_1')->nullable();
            $table->smallInteger('built_in_memory_2')->nullable();

            $table->bigInteger('process_size_id')->unsigned()->nullable();
            $table->foreign('process_size_id')->references('id')->on('processor_sizes')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->smallInteger('no_of_process')->nullable();
            $table->bigInteger('processor_type_id')->unsigned()->nullable();
            $table->foreign('processor_type_id')->references('id')->on('processor_types')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->string('process_text')->nullable();
            $table->string('chipset')->nullable();
            $table->string('gpu')->nullable();

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
        Schema::dropIfExists('mobile_memory_info');
    }
};
