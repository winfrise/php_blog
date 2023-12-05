<?php
namespace fastphp\db;

use \PDOStatement;

class Sql
{
  // 数据库表名
  protected $table;

  // 数据库主键
  protected $primary = 'id';

  private $where = '';

  private $order = '';

  private $limit = '';

  public function allowField($fields) {

    return $this;
  }
  /**
   * 添加一条数据
   * [ 'name'  =>  'thinkphp', 'email' =>  'thinkphp@qq.com' ]
   */
  public function add($data)
  {
    $sql = sprintf("insert into `%s` %s", $this->table, $this->formatInsert($data));
    $sth = Db::pdo()->prepare($sql);
    $sth = $this->formatParam($sth, $data);
    $sth->execute();
    return $this;
  }
  private function formatInsert($data) {
    $fields = array();
    $names = array();
    foreach ($data as $key => $value) {
        $fields[] = sprintf("`%s`", $key);
        $names[] = sprintf(":%s", $key);
    }

    $field = implode(',', $fields);
    $name = implode(',', $names);

    return sprintf("(%s) values (%s)", $field, $name);
  }
  /**
   * 批量增加数据
   * [['name'=>'thinkphp','email'=>'thinkphp@qq.com'], ['name'=>'onethink','email'=>'onethink@qq.com']]
   */
  public function batchAdd($data)
  {
    if (!is_array($data)) {
      return false;
    }

    // 字段
    $fields = array();
    foreach ($data[0] as $k => $v){
        $fields[] = $k;
    }

    $values = array();
    foreach ($data as $arr){
        $temp = array();
        foreach ($arr as $k => $v){
          $temp[] = $v;
        }
        $values[] = "(" . array_join($temp, ',') . ")";
    }


    return $this;
  }

  /**
   * 修改一条数据
   */
  public function edit() {
    return $this;
  }
  /**
   * 批量修改数据
   */
  public function batchEdit($data) {
    if (is_array($data)) {
      return false;
    }
    return $this;
  }

  /**
   * 删除一条数据
   */
  public function delete() {
    return $this;
  }
  /**
   * 批量删除数据
   */
  public function batchDelete() {
    return $this;
  }
  /**
   * 获取数据列表
   */
  public function fetch() {
    $sql = sprintf("select * from `%s` %s %s", $this->table, $this->where, $this->order, $this->limit);
    $sth = Db::pdo()->prepare($sql);
    $sth->execute();

    return $sth->fetchAll();
  }
  /**
   * 查找一条数据
   */
  public function find() {

  }
  private function formatParam(PDOStatement $sth, $params = array())
  {
      foreach ($params as $param => &$value) {
          $param = is_int($param) ? $param + 1 : ':' . ltrim($param, ':');
          $sth->bindParam($param, $value);
      }

      return $sth;
  }
}
