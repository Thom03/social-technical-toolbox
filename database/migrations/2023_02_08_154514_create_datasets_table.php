<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasets', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('author')->nullable();
            $table->year('release_year')->nullable();
            $table->string('resource_files')->nullable();
            $table->string('source')->nullable();
            $table->string('access')->nullable();
            $table->string('license')->nullable();
            $table->string('contact')->nullable();
            $table->string('DOI')->nullable();
            $table->string('collection_period')->nullable();
            $table->string('data_type')->nullable();
            $table->string('methods')->nullable();
            $table->string('resillience_indicators')->nullable();
            $table->string('observations')->nullable();
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
        Schema::dropIfExists('datasets');
    }
}
