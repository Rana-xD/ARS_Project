<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationBody extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_body', function (Blueprint $table) {
            $table->integer('app_body_no')->primary();
            $table->char('is_teiki',1);
            $table->string('nyukyo_yotei_ymd',10);
            $table->string('nyuko_yotei_jiki',10);
            $table->string('postal_code',10);
            $table->string('prefecture',10);
            $table->string('address',200);
            $table->string('address_kana',200);
            $table->string('bukken_name',200);
            $table->string('bukken_name_kana',200);
            $table->string('room_no',10);
            $table->string('madori',10);
            $table->decimal('square_meter',8,4);
            $table->integer('shikikin_hosho');
            $table->integer('shikikin_shokyaku');
            $table->integer('reikin');
            $table->integer('mae_yachin');
            $table->integer('rent');
            $table->integer('mng_cost');
            $table->integer('park_cost');
            $table->integer('other_cost');
            $table->integer('monthly_rent');
            $table->char('del_flg',1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('application_body');
    }
}
