<?php
namespace app\models;

use fastphp\base\Model;
use fastphp\db\Db;

/**
 * 资源Model
 */
class Resource extends Model
{
    /**
     * 自定义当前模型操作的数据库表名称，
     * 如果不指定，默认为类名称的小写字符串，
     * 这里就是 resource 表
     * @var string
     */
    protected $table = 'videos';
    protected $allFields = array('name', 'video_url', 'suffix', 'title', 'tags');


    /**
     * 搜索功能，因为Sql父类里面没有现成的like搜索，
     * 所以需要自己写SQL语句，对数据库的操作应该都放
     * 在Model里面，然后提供给Controller直接调用
     * @param $title string 查询的关键词
     * @return array 返回的数据
     */
    public function search($keyword)
    {
        $sql = "select * from `$this->table` where `item_name` like :keyword";
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, [':keyword' => "%$keyword%"]);
        $sth->execute();

        return $sth->fetchAll();
    }
    public function batchAdd($data) {
      //判断是否是数组
      if (!is_array($data)){
        return $this;
      }
      //判断是否全是非法字段
      if (empty($data)){
        die("非法数据");
      }
      //过滤非法字段
      foreach ($data as $k => $v){
        if (!in_array($k,$this->allFields)){
          unset($data[$k]);
        }
      }
      //将数组中的键取出
      $keys = array_keys($data);
      $values = array_values($data);
      //将数组中取出的键转为字符串拼接
      $key = implode(",",$keys);

      //将数组中的值转化为字符串拼接
      $value = implode("','", $values);

      var_dump("insert into {$this->table} ({$key}) values('{$value}')");
      
      //准备SQL语句
      $sql = "insert into {$this->table} ({$key}) values('{$value}')";
      //执行并发送SQL
      return $this->exec($sql);
    }
}