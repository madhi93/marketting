<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hp_number');
            $table->string('date');
            $table->string('hire_name');
            $table->text('hire_address');
            $table->string('guarantor_name');
            $table->text('guarantor_address');
            $table->string('vehicle_category');
            $table->string('vehicle_vehicle');
            $table->string('vehicle_model');
            $table->string('vehicle_number');
            $table->string('chassis_no');
            $table->string('engine_number');
            $table->string('contract_period');
            $table->string('vehicle_cost');
            $table->string('advance_amount');
            $table->string('financial_charge');
            $table->string('interest');
            $table->string('total_finance');
            $table->string('cost_difference');
            $table->string('caution_deposit');
            $table->string('current_insurance');
            $table->string('rto_expense');
            $table->string('total_other');
            $table->string('reg_date');
            $table->string('dealer_name');
            $table->string('cheque_no');
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
        Schema::dropIfExists('registers');
    }
}
