<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string("site_logo")->nullable();
            $table->string("home_text1")->nullable();
            $table->string("home_text2")->nullable();
            $table->text("description")->nullable();
            $table->string("phone_number1")->nullable();
            $table->string("phone_number2")->nullable();
            $table->string("email1")->nullable();
            $table->string("email2")->nullable();
            $table->string("adress_name")->nullable();
            $table->string("adress_pin")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("linkedin")->nullable();
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
        Schema::dropIfExists('homes');
    }
}
