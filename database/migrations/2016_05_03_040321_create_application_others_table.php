<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_others', function (Blueprint $table) {
            $table->integer('app_other_no')->primary();
            $table->string('biki',1000);
            $table->string('chukai_company',200);
            $table->string('chukai_address',200);
            $table->string('chukai_telephone',20);
            $table->string('chukai_fax',20);
            $table->string('chukai_tantou',100);
            $table->string('kanri_company',200);
            $table->string('kanri_address',200);
            $table->string('kanri_telephone',20);
            $table->string('kanri_fax',20);
            $table->string('kanri_tantou',100);
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
        Schema::drop('application_others');
    }
}
