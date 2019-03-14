<?php

namespace Strangemodule\Controllers;

use Ascmvc\Mvc\Controller;

class FooController extends Controller
{
    public function indexAction($vars = null)
    {
        $this->view['templatefile'] = 'strangefoo_index';
        return $this->view;
    }
}
