<?php
namespace Ustudio\Umra\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Carousel1 extends Controller
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
        BackendMenu::setContext('Ustudio.Umra', 'main-menu-item');
    }

    public function onRun()
    {
        $this->carousel = \Ustudio\Umra\Models\Carousel1::find(1);
    }



}