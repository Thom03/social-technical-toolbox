<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminstrivebountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminstrativeboundary', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('admin_bound_1');
            $table->string('admin_bound_2');
            $table->string('admin_bound_3');
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
        Schema::dropIfExists('adminstrativeboundary');
    }
}
