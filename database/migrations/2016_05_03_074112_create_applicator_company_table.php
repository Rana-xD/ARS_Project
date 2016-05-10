<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicatorCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicator_company', function (Blueprint $table) {
          $table->integer('app_otu_company_no')->primary();
          $table->string('postal_code',10);
          $table->string('prefecture',10);
          $table->string('address',200);
          $table->string('address_kana',200);
          $table->string('company_name',100);
          $table->string('company_name_kana',100);
          $table->string('daihyosha_name',100);
          $table->string('daihyosha_name_kana',100);
          $table->string('telephone',20);
          $table->string('telephone_tanto',20);
          $table->string('mail_address',100);
          $table->string('tanto_busho',100);
          $table->string('tantosha_name',100);
          $table->string('homepage',200);
          $table->char('jigyo',2);
          $table->string('jigyo_other',100);
          $table->char('nyukyo_riyu',2);
          $table->string('nyukyo_riyu_other',100);
          $table->string('foundation_ym',10);
          $table->char('jojo_flg',1);
          $table->decimal('shihonkin',10,4);
          $table->decimal('nensho',10,4);
          $table->integer('employers');
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
        Schema::drop('applicator_company');
    }
}
