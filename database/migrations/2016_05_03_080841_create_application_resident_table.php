<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationResidentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_resident', function (Blueprint $table) {
          $table->integer('app_resident_no')->primary();
          $table->char('nyukyosha',2);
          $table->string('nyukyosha_other',100);
          $table->string('nyukyosha_1_name',100);
          $table->char('nyukyosha_1_sex',1);
          $table->string('nyukyosha_1_tsuzukigara',10);
          $table->string('nyukyosha_1_birthday',10);
          $table->string('nyukyosha_1_mobile_phone',20);
          $table->decimal('nyukyosha_1_nenshu',10,4);
          $table->string('nyukyosha_1_work_place',100);
          $table->string('nyukyosha_2_name',100);
          $table->char('nyukyosha_2_sex',1);
          $table->string('nyukyosha_2_tsuzukigara',10);
          $table->string('nyukyosha_2_birthday',10);
          $table->string('nyukyosha_2_mobile_phone',20);
          $table->decimal('nyukyosha_2_nenshu',10,4);
          $table->string('nyukyosha_2_work_place',100);
          $table->string('nyukyosha_3_name',100);
          $table->char('nyukyosha_3_sex',1);
          $table->string('nyukyosha_3_tsuzukigara',10);
          $table->string('nyukyosha_3_birthday',10);
          $table->string('nyukyosha_3_mobile_phone',20);
          $table->decimal('nyukyosha_3_nenshu',10,4);
          $table->string('nyukyosha_3_work_place',100);
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
        Schema::drop('application_resident');
    }
}
