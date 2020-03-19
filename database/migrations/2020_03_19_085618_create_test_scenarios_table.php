<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestScenariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_scenarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sequence');
            $table->text('input');
            $table->text('expected');
            $table->text('output')->nullable();
            $table->boolean('status')->nullable();
            $table->text('attachment')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('test_scenarios');
    }
}
