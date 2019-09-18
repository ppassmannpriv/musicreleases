<?php namespace Papa\Musicreleases\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePapaMusicreleasesReleasetypes extends Migration
{
    public function up()
    {
        Schema::create('papa_musicreleases_releasetypes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('code');
            $table->string('name');
            $table->string('base_url');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('papa_musicreleases_releasetypes');
    }
}
