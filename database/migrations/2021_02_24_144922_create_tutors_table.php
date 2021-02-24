<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nameBuisness');
            $table->string('typeDocument');
            $table->string('documentNumber');
            $table->string('name');
            $table->string('secondName');
            $table->string('lastName');
            $table->string('country');
            $table->string('municipy');
            $table->string('province');
            $table->string('status');
            $table->string('number');
            $table->string('email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutors');
    }
}
