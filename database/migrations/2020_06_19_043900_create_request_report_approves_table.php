<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestReportApprovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_report_approves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('report_id');
            $table->integer('user_id');
            $table->enum('status', ['waiting', 'revision', 'hold', 'cancel', 'acc'])->default('waiting');
            $table->string('position');
            $table->string('subject');
            $table->integer('priority');
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
        Schema::dropIfExists('request_report_approves');
    }
}