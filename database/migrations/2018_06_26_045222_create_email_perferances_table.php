<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailPerferancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('email_perferances', function (Blueprint $table) {
            $table->increments('email_id');
            $table->integer('user_id');
            $table->integer('message_status');
            $table->integer('read_message_status');
            $table->integer('photo_request_status');
            $table->integer('responce_photo_request_status');
            $table->integer('pure_matches_status');
            $table->integer('who_i_am_status');
            $table->integer('who_looking_status');
            
            $table->integer('kaboolhai_notifaction_status');

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
        //
    }
}
