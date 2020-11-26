<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('automobile_id');
            $table->text('complaint')->nullable();
            $table->text('note')->nullable();
            $table->decimal('about_price', 5, 2);
            $table->decimal('service_price', 5, 2);
            $table->decimal('parts_price', 5, 2);
            $table->decimal('discount', 5, 2);
            $table->unsignedTinyInteger('is_pending')->nullable();
            $table->unsignedTinyInteger('is_paid')->nullable();
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
        Schema::dropIfExists('auto_services');
    }
}
