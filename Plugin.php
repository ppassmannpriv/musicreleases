<?php namespace Papa\Musicreleases;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Papa\Musicreleases\Components\ReleasesList' => 'releasesList',
        ];
    }

    public function registerSettings()
    {
    }
}
