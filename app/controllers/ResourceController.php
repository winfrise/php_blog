<?php
namespace app\controllers;

use fastphp\base\Controller;
use app\models\Scan;
 
class ResourceController extends Controller
{
    // 首页方法，测试框架自定义DB查询
    public function index()
    {
        function generateTree($dir) {
            $tree = [];
            if (is_dir($dir)) {
                $files =scandir($dir);
                foreach ($files as $file) {
                    if ($file !== '.' &&$file !== '..') {
                        $path = $dir . '/' . $file;
                        if(is_dir($path)) {
                            $tree[] = array('text' => $file, 'children' => generateTree($path));
                        } else{
                            $tree[] = array('text' => $file, 'children' => array());
                        }
                    }
                }
            }

            return $tree;
        }

        function generateList($dir) {
            $list = [];
            if (is_dir($dir)) {
                $files =scandir($dir);
                foreach ($files as $file) {
                    if ($file !== '.' && $file !== '..') {
                        $path = $dir . '/' . $file;
                        if(is_dir($path)) {
                            $list = array_merge($list, generateList($path));
                        } else{
                            //  匹配文件后缀, $file 为 xxx.jpg
                            preg_match('/[^.]+$/', $file, $matches);
                            $suffix = $matches[0];

                            // 匹配文件名(不包虑后缀)
                            preg_match('/^[^.]+/', $file, $matches);
                            $title = $matches[0];

                            $absolute_path = str_replace(VIDEO_DIR, '/video_dir', $path);

                            // 通过正则匹配Tag
                            $tags = array_slice(explode('/', $absolute_path), 2, -1);

                            $list[] = array(
                                'name' => $file,
                                'path' => $absolute_path,
                                'suffix' => $suffix,
                                'title' => $title,
                                'tags' => $tags
                            );
                        }
                    }
                }
            }

            return $list;
        }
        
        $path = VIDEO_DIR;
        if (isset($_GET['path'])) {
            $path = $path . '/' . $_GET['path'];
        }
        $list = generateList($path);
        
        $this->assign('file_list', $list);
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
    public function manage($id = 0)
    {
        $item = array();
        if ($id) {
            // 通过名称占位符传入参数
            $item = (new Item())->where(["id = :id"], [':id' => $id])->fetch();
        }

        $this->assign('title', '管理条目');
        $this->assign('item', $item);
        $this->render();
    }
    
    // 更新记录，测试框架DB记录更新（Update）
    public function update()
    {
        $data = array('id' => $_POST['id'], 'item_name' => $_POST['value']);
        $count = (new Item)->where(['id = :id'], [':id' => $data['id']])->update($data);

        $this->assign('title', '修改成功');
        $this->assign('count', $count);
        $this->render();
    }
    
    // 删除记录，测试框架DB记录删除（Delete）
    public function delete($id = null)
    {
        $count = (new Item)->delete($id);

        $this->assign('title', '删除成功');
        $this->assign('count', $count);
        $this->render();
    }
}