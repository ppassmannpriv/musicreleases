<?php namespace Papa\Musicreleases\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePapaMusicreleasesReleases extends Migration
{
    public function up()
    {
        Schema::table('papa_musicreleases_releases', function($table)
        {
            $table->renameColumn('artist', 'artist_id');
            $table->renameColumn('type', 'type_id');
        });
    }
    
    public function down()
    {
        Schema::table('papa_musicreleases_releases', function($table)
        {
            $table->renameColumn('artist_id', 'artist');
            $table->renameColumn('type_id', 'type');
        });
    }
}
