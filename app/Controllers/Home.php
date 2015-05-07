<?php
namespace App\Controllers;

use System\Core\Controller\BaseController;

class Home extends BaseController
{

    public function index()
    {
        $this->view('index', [
            'viewContent'=> 'home/index',
        ]);
    }


}