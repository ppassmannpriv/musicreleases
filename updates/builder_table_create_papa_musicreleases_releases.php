<?php namespace Papa\Musicreleases\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePapaMusicreleasesReleases extends Migration
{
    public function up()
    {
        Schema::create('papa_musicreleases_releases', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->integer('artist')->nullable();
            $table->integer('type')->default(1);
            $table->string('url');
            $table->string('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('papa_musicreleases_releases');
    }
}
