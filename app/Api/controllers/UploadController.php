<?php
namespace app\Api\controllers;

use fastphp\base\Controller;
use app\Api\models\Upload;

class UploadController extends Controller
{
    public function list()
    {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        $limit = isset($_GET['page_size']) ? $_GET['limit'] : 10;
        $page_num = isset($_GET['page_num']) ? $_GET['page_num'] : 1;

        if ($keyword) {
            $items = (new Upload())->search($keyword);
        } else {
            $items = (new Upload)->where()->order(['id DESC'])->limit($page_size * ($limit - 1), $limit)->fetchAll();
        }

        $this->assign('items', $items);
        $this->render();
    }

    public function add()
    {
      $targetDir = APP_PATH . "uploads/"; // 设置目标存放路径
      $targetFile = $targetDir . basename($_FILES["file"]["name"]); // 获取要保存的文件名及路径
      $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION)); // 获取文件类型（小写）
      // 判断文件类型是否为图片格式
      if (($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg")) {
         if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
          $res = array(
            'code' => '000000',
            'message' => '文件上传成功',
            'data' => array(
              'src' => $targetFile,
            )
          );
         } else {
          $res = array(
            'code' => '000000',
            'message' => '文件上传失败1',
            'data' => array(
              'src' => '',
            )
          );
         }
      } else {
        $res = array(
          'code' => '000000',
          'message' => '文件上传失败2',
          'data' => array(
            'src' => '',
          )
        );

      }
      echo json_encode($res);

    }
}
