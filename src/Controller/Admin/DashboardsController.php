<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\AppController;


class DashboardsController extends AppController
{

    public function initialize():void
    {
        parent::initialize();
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

    }


    public function index()
    {
        //$this->autoRender = false;
    }
}
