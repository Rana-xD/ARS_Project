<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationContantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_contact', function (Blueprint $table) {
            $table->integer('app_contact_no')->primary();
            $table->string('postal_code',10);
            $table->string('prefecture',10);
            $table->string('address',200);
            $table->string('address_kana',200);
            $table->string('name',100);
            $table->string('name_kaka',100);
            $table->char('sex',1);
            $table->string('tsuzukigara',10);
            $table->string('birthday',10);
            $table->integer('age');
            $table->string('telephone',20);
            $table->string('mobile_phone',20);
            $table->string('work_place',100);
            $table->string('work_place_kana',100);
            $table->decimal('nenshu',10,4);
            $table->decimal('gesshu',10,4);
            $table->string('work_place_tel',20);
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
        Schema::drop('application_contact');
    }
}
