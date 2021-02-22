<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userregs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('ref_name');
            $table->string('ref_mobile');
            $table->string('ds_adhar');
            $table->string('ds_reg_name');
            $table->string('ds_name');
            $table->string('ds_dob');
            $table->string('ds_mobile');
            $table->string('ds_address');
            $table->string('ds_state');
            $table->string('ds_distict');
            $table->string('ds_email');
            $table->string('ds_pincode');
            $table->string('ds_acc_no');
            $table->string('ds_ifsc_code');
            $table->string('ds_pan_number');
            $table->string('ds_branch');
            $table->string('n_name');
            $table->string('n_relationship');
            $table->string('n_mobile');
            $table->string('n_adhar');
            $table->string('n_address');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userregs');
    }
}
