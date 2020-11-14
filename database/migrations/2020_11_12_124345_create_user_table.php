<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            // ex: 957-875-875 OR 015167186688
            $table->string('telephone', 25)
                ->nullable();
            $table->string('email', 100)
                ->unique();
            $table->tinyInteger('is_active')
                ->default(1)
                ->index();
            $table->string('token', 50)
                ->nullable();
            // indicate the last completed step as a fallback
            $table->integer('completed_step')
                ->default(1);
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
        Schema::dropIfExists('user');
    }
}
