<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_address', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->string('street', 100);
            // string for some special cases like 10B house number
            $table->string('house_number', 5);
            // string for having 'A-Z' or '-' characters
            $table->string('zip_code', 20);
            $table->string('city', 40);
            // country codes 'DE'
            $table->string('country', 2);
            $table->tinyInteger('is_primary')
                ->default(0);
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
        Schema::dropIfExists('user_address');
    }
}
