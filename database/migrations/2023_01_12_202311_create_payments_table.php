<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('sys_trx_no');
            $table->string('gw_payment_id');
            $table->string('gw_trx_no')->nullable();
            $table->string('gw_trx_ref_no')->nullable();
            $table->string('sys_requested_amount');
            $table->string('gw_approved_amount');
            $table->string('payment_currency');
            $table->string('status');
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
        Schema::dropIfExists('payments');
    }
};
