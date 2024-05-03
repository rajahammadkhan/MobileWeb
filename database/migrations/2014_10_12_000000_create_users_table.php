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
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('id')->index();

            $table->string('first_name', 255)->index()->nullable();
            $table->string('middle_name', 255)->index()->nullable();
            $table->string('last_name', 255)->index()->nullable();
            $table->text('about_me')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->date('date_of_probation_end')->nullable();
            $table->string('employee_id', 255)->nullable();
            $table->tinyInteger('gender')->nullable()->comment('1=male, 2=female, 3=other');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();

            $table->string('phone_no', 500)->index()->nullable();
            $table->string('address', 1000)->nullable();
            $table->string('map_address', 1500)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('zip', 50)->nullable();
            $table->string('lat', 100)->nullable();
            $table->string('lng', 100)->nullable();
            $table->tinyInteger('email_verified')->default(0)->comment('0=no, 1=yes');
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('phone_verified')->default(0)->comment('0=no, 1=yes');
            $table->tinyInteger('is_login')->default(0)->comment('0=no, 1=yes');
            $table->tinyInteger('is_blocked')->default(0)->comment('0=no, 1=yes');

//            $table->bigInteger('created_by')->unsigned()->nullable();
//            $table->foreign('created_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
//            $table->bigInteger('updated_by')->unsigned()->nullable();
//            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
//            $table->bigInteger('deleted_by')->unsigned()->nullable();
//            $table->foreign('deleted_by')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');

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
        Schema::dropIfExists('users');
    }
};
