<?php namespace Papa\Musicreleases\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Artists extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Papa.Musicreleases', 'musicreleases', 'artists');
    }
}
