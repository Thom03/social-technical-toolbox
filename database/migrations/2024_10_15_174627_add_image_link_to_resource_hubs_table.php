<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageLinkToResourceHubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resource_hubs', function (Blueprint $table) {
            //
            $table->string('image_link')->nullable()->after('link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resource_hubs', function (Blueprint $table) {
            $table->dropColumn('image_link');  //
        });
    }
}
