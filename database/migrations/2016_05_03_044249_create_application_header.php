<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_header', function (Blueprint $table) {
          $table->integer('app_no')->primary();
          $table->integer('app_body_no');
          $table->integer('app_otu_no');
          $table->integer('app_otu_company_no');
          $table->integer('app_contact_no');
          $table->integer('app_cosigner_no');
          $table->integer('app_resident_no');
          $table->integer('app_other_no');
          $table->boolean('is_individual');
          $table->char('del_flag',1);
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
        Schema::drop('application_header');
    }
}
