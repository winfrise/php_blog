<?php
namespace app\controllers;

use fastphp\base\Controller;
// use app\models\Home;
 
class HomeController extends Controller
{
    // 首页方法，测试框架自定义DB查询
    public function index()
    {
        $this->render();
    }
}