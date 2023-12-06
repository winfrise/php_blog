<?php
namespace app\Api\controllers;

use fastphp\base\Controller;
use app\Api\models\Article;

class ArticleController extends Controller
{
  public function index()
  {
    $this->render();
  }

  public function list() {
    $items = (new Article)->fetchAll();
    $total = (new Article)->getTotal();
    $res = array(
      'code' => '000000',
      'message' => '成功',
      'data' => array(
        'total' => $total,
        'list' => $items
      )
    );
    echo json_encode($res);
  }

  public function detail()
  {

    $this->render();
  }

  public function add() {
    $data = array(
        'title' => $_POST['title'],
        'intro' => $_POST['intro'],
        'content' => $_POST['content']
    );

    $count = (new Article)->add($data);

    $res = array(
      'code' => '000000',
      'message' => '成功',
      'data' => array(
        'count' => $count
      )
    );
    echo json_encode($res);
  }
}
