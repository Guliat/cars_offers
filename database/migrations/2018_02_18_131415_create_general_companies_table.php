<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name')->nullable();
            $table->string('number')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('address')->nullable();
            $table->string('manager')->nullable();
            $table->string('phone')->nullable();
            $table->string('bank')->nullable();
            $table->string('iban')->nullable();
            $table->string('bic')->nullable();
            $table->text('note')->nullable();
            $table->unsignedTinyInteger('is_provider')->nullable();
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
        Schema::dropIfExists('general_companies');
    }
}
