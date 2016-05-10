<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_result', function (Blueprint $table) {
          $table->integer('app_no')->primary();
          $table->char('risk_class',2);
          $table->integer('risk_score');
          $table->decimal('probability',10,4);
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
        Schema::drop('review_result');
    }
}
