<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOffersItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('quantity_type')->nullable();
            $table->decimal('price', 15, 3)->nullable();
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
        Schema::dropIfExists('offers_items');
    }
}
