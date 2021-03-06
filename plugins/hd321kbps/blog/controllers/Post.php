<?php namespace Hd321kbps\Blog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Post Back-end Controller
 */
class Post extends Controller
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

        BackendMenu::setContext('Hd321kbps.Blog', 'blog', 'post');
    }
}
