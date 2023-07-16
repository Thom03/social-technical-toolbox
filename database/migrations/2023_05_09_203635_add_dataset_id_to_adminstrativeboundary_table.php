<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDatasetIdToAdminstrativeboundaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adminstrativeboundaries', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('dataset_id')->nullable();
            $table->foreign('dataset_id')->references('id')->on('datasets')->onDelete('cascade');
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
        });
    }
}
