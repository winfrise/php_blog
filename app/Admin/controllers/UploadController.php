<?php
namespace app\Admin\controllers;

use fastphp\base\Controller;

class UploadController extends Controller
{
    public function list()
    {

        $this->assign('items', $items);
        $this->render();
    }


    public function add()
    {

        $this->render();
    }
}
