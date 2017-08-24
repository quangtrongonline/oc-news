<?php namespace Indikator\News\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Logs extends Controller
{
    public $implement = [
        //'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $requiredPermissions = ['indikator.news.logs'];

    //public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Indikator.News', 'news', 'logs');
    }

    /*
    public function index()
    {
        $this->pageTitle = 'indikator.news::lang.menu.logs';
    }
    */
}
