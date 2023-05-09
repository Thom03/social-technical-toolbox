<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasetAdminstrivebountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataset_adminstrativeboundary', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dataset_id')->constrained();
            $table->foreignId('adminstrativeboundary_id')->constrained();
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
        Schema::dropIfExists('dataset_adminstrativeboundary');
    }
}
