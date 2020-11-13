<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPaymentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_payment_info', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('account_owner_name', 50);
            $table->string('iban', 34)
                ->index();
            $table->string('payment_data')
                ->nullable();
            $table->tinyInteger('is_primary')
                ->default(0);
            $table->integer('status')->nullable();
            $table->text('response')
                ->nullable();
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
        Schema::dropIfExists('user_payment_info');
    }
}
