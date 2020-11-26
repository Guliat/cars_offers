<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegNumberColumnToAutoAutomobiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auto_automobiles', function (Blueprint $table) {
            $table->string('reg_number')->unique()->after('submodel_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auto_automobiles', function (Blueprint $table) {
            $table->dropColumn('reg_number');
        });
    }
}
