<?php namespace Hd321kbps\Blog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Category Back-end Controller
 */
class Category extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Hd321kbps.Blog', 'blog', 'category');
    }
}
