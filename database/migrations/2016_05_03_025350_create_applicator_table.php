<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicator', function (Blueprint $table) {
            $table->integer('app_otu_no')->primary();
            $table->string('postal_code',10);
            $table->string('prefecture',10);
            $table->string('address',200);
            $table->string('address_kana',200);
            $table->string('name',100);
            $table->string('name_kana',100);
            $table->char('sex',1);
            $table->string('telephone',20);
            $table->string('mobile_phone',20);
            $table->date('birthday');
            $table->integer('age');
            $table->string('drivers_lisence',20);
            $table->string('nationality',100);
            $table->char('family',2);
            $table->string('family_other',100);
            $table->char('address_type',2);
            $table->char('retai_hoshonin',2);
            $table->decimal('current_rent',10,4);
            $table->decimal('hensai',10,4);
            $table->integer('kyoju_nensu_y');
            $table->integer('kyoju_nensu_m');
            $table->char('tenkyo_riyu',2);
            $table->string('tenkyo_other',100);
            $table->char('job_type',2);
            $table->string('job_other',100);
            $table->char('business_type',2);
            $table->string('business_other',100);
            $table->string('work_place_name',100);
            $table->string('work_place_name_kana',100);
            $table->string('work_place_pref',10);
            $table->string('work_place_address',200);
            $table->string('work_place_address_kana',200);
            $table->string('work_place_tel',20);
            $table->decimal('nenshu',10,4);
            $table->decimal('gesshu',10,4);
            $table->integer('employers');
            $table->string('busho',100);
            $table->string('yakushoku',100);
            $table->integer('kinzoku_y');
            $table->integer('kinzoku_m');
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
        Schema::drop('applicator');
    }
}
