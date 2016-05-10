<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationCosignerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_cosigner', function (Blueprint $table) {
            $table->integer('app_cosigner_no')->primary();
            $table->string('postal_code',10);
            $table->string('prefecture',10);
            $table->string('address',200);
            $table->string('address_kana',200);
            $table->string('name',100);
            $table->string('name_kaka',100);
            $table->string('tsuduki_gara',10);
            $table->char('sex',1);
            $table->string('birthday',10);
            $table->integer('age');
            $table->string('telephone',20);
            $table->string('mobile_phone',20);
            $table->string('driver_license_no',20);
            $table->string('work_place',100);
            $table->string('work_place_kana',100);
            $table->string('work_place_postal_code',10);
            $table->string('work_place_prefecture',10);
            $table->string('work_place_address',200);
            $table->string('work_place_address_kana',200);
            $table->decimal('nenshu',10,4);
            $table->decimal('gesshu',10,4);
            $table->string('busho',100);
            $table->string('yakushoku',100);
            $table->integer('kinzoku_y');
            $table->integer('kinzoku_m');
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
        Schema::drop('application_cosigner');
    }
}
