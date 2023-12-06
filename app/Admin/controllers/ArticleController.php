<?php
namespace app\Admin\controllers;

use fastphp\base\Controller;
use app\Api\models\Article;

class ArticleController extends Controller
{
  public function index()
  {
    $this->render();
  }

  public function list() {
    $this->render();
  }

  public function detail()
  {
    $type = isset($_GET['type']) ? $_GET['type'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    $item = (new Article)->where(["id = :id"], [':id' => $id])->fetch();

    $this->assign('type', $type);
    $this->assign('item', $item);
    $this->render();
  }
}
