<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAutoAutomobiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_automobiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedTinyInteger('type_id')->nullable();
            $table->unsignedTinyInteger('coupe_id')->nullable();
            $table->unsignedTinyInteger('gear_id')->nullable();
            $table->unsignedTinyInteger('fuel_id')->nullable();
            $table->unsignedInteger('submodel_id')->nullable();
            $table->string('color')->nullable();
            $table->text('note')->nullable();
            $table->unsignedTinyInteger('is_active')->default('1');
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
        Schema::dropIfExists('auto_automobiles');
    }
}
