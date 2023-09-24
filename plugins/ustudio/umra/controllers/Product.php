<?php namespace Ustudio\Umra\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Product extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Ustudio.Umra', 'main-menu-item1', 'side-menu-item3');
    }

}
