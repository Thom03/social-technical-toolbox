<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_data', function (Blueprint $table) {
            $table->id();
            $table->string('dataset_url')->nullable();
            $table->string('title')->nullable()->unique();
            $table->string('country')->nullable();
            $table->integer('year')->nullable();
            $table->string('organization')->nullable();
            $table->string('collection')->nullable();
            $table->string('study_id')->nullable();
            $table->timestamp('last_modified')->nullable();
            $table->integer('views')->nullable();
            $table->string('data_access')->nullable();
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
        Schema::dropIfExists('inventory_data');
    }
}
