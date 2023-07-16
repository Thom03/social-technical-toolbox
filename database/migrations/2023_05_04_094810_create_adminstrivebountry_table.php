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
        Schema::create('adminstrativeboundaries', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('admin_bound_1')->nullable();
            $table->string('admin_bound_2')->nullable();
            $table->string('admin_bound_3')->nullable();
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
        Schema::dropIfExists('adminstrativeboundaries');
    }
}
