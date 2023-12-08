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

  // Pdo bindParam()绑定的参数集合
  private $param = array();

  public function allowField($fields) {

    return $this;
  }

  public function where($where = array(), $param = array())
  {
      if ($where) {
        $this->where .= ' WHERE ';
        $this->where .= implode(' ', $where);
        $this->param = $param;
      }

      return $this;
  }


  public function order() {
    return $this;
  }

  public function limit() {
    return $this;
  }
  public function getTotal()
  {
    $sql = sprintf("select count(*) as total from `%s` %s", $this->table, $this->where);
    $sth = Db::pdo()->prepare($sql);
    $sth->execute();
    $res = $sth->fetch();

    return $res['total'];
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
  public function update($data) {
    $sql = sprintf("update `%s` set %s %s", $this->table, $this->formatUpdate($data), $this->where);
    // $sql = "UPDATE `article` SET `cate_id` = '1', `status` = '1', `is_top` = '1' WHERE `article`.`id` = 2;";
    var_dump($sql);
    $sth = Db::pdo()->prepare($sql);
    $sth = $this->formatParam($sth, $data);
    $sth->execute();

    return $sth->rowCount();
  }
  /**
   * 批量修改数据
   */
  public function batchUpdate($data) {
    if (is_array($data)) {
      return false;
    }
    return $this;
  }

  /**
   * 删除一条数据
   */
  public function delete($id) {
    $sql = sprintf("delete from `%s` where `%s` = :%s", $this->table, $this->primary, $this->primary);
    $sth = Db::pdo()->prepare($sql);
    $sth = $this->formatParam($sth, [$this->primary => $id]);
    $sth->execute();

    return $sth->rowCount();
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
  public function fetchAll() {
    $sql = sprintf("select * from `%s` %s %s", $this->table, $this->where, $this->order, $this->limit);
    $sth = Db::pdo()->prepare($sql);
    $sth->execute();

    return $sth->fetchAll();
  }
  /**
   * 查找一条数据
   */
  public function fetch() {
    $sql = sprintf("select * from `%s` %s", $this->table, $this->where);
    $sth = Db::pdo()->prepare($sql);
    $sth = $this->formatParam($sth, $this->param);
    $sth->execute();

    return $sth->fetch();
  }
  /**
   * 占位符绑定具体的变量值
   * @param PDOStatement $sth 要绑定的PDOStatement对象
   * @param array $params 参数，有三种类型：
   * 1）如果SQL语句用问号?占位符，那么$params应该为
   *    [$a, $b, $c]
   * 2）如果SQL语句用冒号:占位符，那么$params应该为
   *    ['a' => $a, 'b' => $b, 'c' => $c]
   *    或者
   *    [':a' => $a, ':b' => $b, ':c' => $c]
   *
   * @return PDOStatement
   */
  private function formatParam(PDOStatement $sth, $params = array())
  {
      foreach ($params as $param => &$value) {
          $param = ':' . ltrim($param, ':');
          $sth->bindParam($param, $value);
      }

      return $sth;
  }
  // 将数组转换成更新格式的sql语句
  private function formatUpdate($data)
  {
      $fields = array();
      foreach ($data as $key => $value) {
          $fields[] = sprintf("`%s` = :%s", $key, $key);
      }

      return implode(',', $fields);
  }
}
