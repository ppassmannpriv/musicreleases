<?php namespace Papa\Musicreleases\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePapaMusicreleasesReleasetypes extends Migration
{
    public function up()
    {
        Schema::table('papa_musicreleases_releasetypes', function($table)
        {
            $table->string('code', 255)->change();
            $table->string('name', 255)->change();
            $table->string('base_url', 255)->change();
        });
    }
    
    public function down()
    {
        Schema::table('papa_musicreleases_releasetypes', function($table)
        {
            $table->string('code', 191)->change();
            $table->string('name', 191)->change();
            $table->string('base_url', 191)->change();
        });
    }
}
