<?php
namespace app\Index\controllers;

use fastphp\base\Controller;
use app\Index\models\Item;

class ItemController extends Controller
{
    // 首页方法，测试框架自定义DB查询
    public function index()
    {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

        $items = (new Item)->fetchAll();
        $this->assign('keyword', $keyword);
        $this->assign('items', $items);
        $this->render();
    }

    // 查看单条记录详情
    public function detail($id)
    {
        // 通过?占位符传入$id参数
        $item = (new Item())->where(["id = ?"], [$id])->fetch();

        $this->assign('title', '条目详情');
        $this->assign('item', $item);
        $this->render();
    }

    // 添加记录，测试框架DB记录创建（Create）
    public function add()
    {
        $data['item_name'] = $_POST['value'];
        $count = (new Item)->add($data);

        $this->assign('title', '添加成功');
        $this->assign('count', $count);
        $this->render();
    }

    // 操作管理
    public function manage()
    {
      $id = isset($_GET['id']) ? $_GET['id'] : '';

      $item = array();
      if ($id) {
        // 通过名称占位符传入参数
        $item = (new Item())->where(["id = {$id}"])->fetch();
      }

      $this->assign('title', '管理条目');
      $this->assign('item', $item);
      $this->render();
    }

    // 更新记录，测试框架DB记录更新（Update）
    public function update()
    {
        $data = array('id' => $_POST['id'], 'item_name' => $_POST['value']);

        $count = (new Item)->where(["id = {$data['id']}"])->update($data);

        $this->assign('title', '修改成功');
        $this->assign('count', $count);
        $this->render();
    }

    // 删除记录，测试框架DB记录删除（Delete）
    public function delete()
    {
      $id = isset($_GET['id']) ? $_GET['id'] : '';
      $count = (new Item)->delete($id);
      $this->assign('count', $count);
      $this->render();
    }
}
