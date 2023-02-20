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
            $table->char('title', 255);
            $table->char('author', 255);
            $table->year('release_year');
            $table->char('source', 255);
            $table->string('access');
            $table->string('license');
            $table->string('contact');
            $table->string('DOI');
            $table->string('providers');
            $table->string('collection_period');
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
