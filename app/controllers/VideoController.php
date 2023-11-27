<?php
namespace app\controllers;

use fastphp\base\Controller;
use app\models\Video;
 
class VideoController extends Controller
{
    // 首页方法，测试框架自定义DB查询
    public function index()
    {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        $page_size = isset($_GET['page_size']) ? $_GET['page_size'] : 10;
        $page_num = isset($_GET['page_num']) ? $_GET['page_num'] : 1;

        if ($keyword) {
            $items = (new Video())->search($keyword);
        } else {
            // 查询所有内容，并按倒序排列输出
            // where()方法可不传入参数，或者省略
            $items = (new Video)->where()->order(['id DESC'])->limit($page_size * ($page_num - 1), $page_size * $page_num)->fetchAll();
        }

        $this->assign('title', '全部条目');
        $this->assign('keyword', $keyword);
        $this->assign('items', $items);
        $this->render();
    }

    // 查看单条记录详情
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        // 通过?占位符传入$id参数
        $item = (new Video())->where(["id = ?"], [$id])->fetch();

        $this->assign('title', '条目详情');
        $this->assign('item', $item);
        $this->render();
    }
    
    // 添加记录，测试框架DB记录创建（Create）
    public function add()
    {
        $data = array(
            'title' => $_POST['title'],
            'name' => $_POST['name'],
            'tags' => $_POST['tags'],
            'video_url' => $_POST['video_url'],
            'video_poster' => $_POST['video_poster'],
            'content' => $_POST_['content'],
            'suffix' => $_POST['suffix']
        );
        $count = (new Video)->add($data);

        $this->assign('title', '添加成功');
        $this->assign('count', $count);
        $this->render();
    }
    
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $item = array();
        if ($id) {
            $item = (new Video())->where(["id = :id"], [':id' => $id])->fetch();
        }

        $this->assign('title', '管理条目');
        $this->assign('item', $item);
        $this->render();
    }
    
    // 更新记录，测试框架DB记录更新（Update）
    public function update()
    {
        $data = array(
            'id' => $_POST['id'], 
            'title' => $_POST['title'],
            'name' => $_POST['name'],
            'tags' => $_POST['tags'],
            'video_url' => $_POST['video_url'],
            'video_poster' => $_POST['video_poster'],
            'content' => $_POST['content'],
            'suffix' => $_POST['suffix']
        );
        $count = (new Video)->where(['id = :id'], [':id' => $data['id']])->update($data);

        $this->assign('title', '修改成功');
        $this->assign('count', $count);
        $this->render();
    }
    
    // 删除记录，测试框架DB记录删除（Delete）
    public function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        if ($id) {
            $count = (new Video)->delete($id);

            $this->assign('title', '删除成功');
            $this->assign('count', $count);
            $this->render();
        }
    }
}