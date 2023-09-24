<?php namespace Ustudio\Umra\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Contact extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class
    ];

    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Ustudio.Umra', 'main-menu-item1', 'side-menu-item5');
    }

    public function index()
    {
        $model = $this->formCreateModelObject()->first();

        if (!$model) {
            $model = $this->formCreateModelObject();
            $model->forceSave();
        }

         return Backend::redirect("ustudio/umra/contact/update/{$model->id}");
    }
}
