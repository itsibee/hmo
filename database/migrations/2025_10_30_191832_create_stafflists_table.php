<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafflistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stafflists', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('department');
            $table->string('staff_number');
            $table->string('station');
            $table->string('nin');
            $table->string('hmo');
            $table->string('state_of_residence');
            $table->string('phone');
            $table->string('ref');
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
        Schema::dropIfExists('stafflists');
    }
}
