<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountryIdAdminstrativeboundaries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adminstrativeboundaries', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->nullable();;
            $table->geometry('coordinates')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adminstrativeboundaries', function (Blueprint $table) {
            //
            $table->dropColumn('country_id');
            $table->dropColumn('coordinates');
        });
    }
}
