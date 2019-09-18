<?php namespace Papa\Musicreleases\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePapaMusicreleasesArtists extends Migration
{
    public function up()
    {
        Schema::create('papa_musicreleases_artists', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('papa_musicreleases_artists');
    }
}
