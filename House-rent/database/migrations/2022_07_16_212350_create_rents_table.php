<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string("price");
            $table->string("city");
            $table->string("address");
            $table->string("region");
            $table->string("category");
            $table->string("bedroom");
            $table->string("bathroom");
            $table->longText("description");
            $table->string("area");
            $table->string("phone");
            $table->string("gallery");
            $table->string("status");
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
        Schema::dropIfExists('rents');
    }
}
