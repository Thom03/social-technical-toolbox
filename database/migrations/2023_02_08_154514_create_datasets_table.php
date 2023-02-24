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
            $table->string('title');
            $table->string('author');
            $table->year('release_year');
            $table->bigInteger('region_id');
            $table->bigInteger('theme_id');
            $table->bigInteger('impact_id');
            $table->bigInteger('impactareas')->nullable();
            $table->string('resource_files')->nullable();
            $table->char('source', 255);
            $table->string('access');
            $table->string('license')->nullable();
            $table->string('contact')->nullable();
            $table->string('DOI')->nullable();
            $table->string('providers');
            $table->string('collection_period')->nullable();
            $table->string('data_type')->nullable();
            $table->string('methods')->nullable();
            $table->string('production_system')->nullable();
            $table->string('technology_practice')->nullable();
            $table->boolean('gender_responsive')->default(false);
            $table->boolean('social_inclusion')->default(false);
            $table->boolean('policy_institutional')->default(false);
            $table->boolean('organizational')->default(false);
            $table->boolean('marketing')->default(false);
            $table->boolean('financial')->default(false);
            $table->boolean('insurance')->default(false);
            $table->boolean('digital')->default(false);
            $table->boolean('training')->default(false);
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
