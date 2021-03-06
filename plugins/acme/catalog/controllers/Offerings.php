<?php namespace Acme\Catalog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Opportunities Back-end Controller
 */
class Offerings extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Acme.Catalog', 'catalog', 'offerings');
    }
}