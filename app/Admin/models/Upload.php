<?php
namespace app\Api\models;

use fastphp\base\Model;
use fastphp\db\Db;

class Upload extends Model
{
    protected $table = 'upload';

    public function search($keyword)
    {
        $sql = "select * from `$this->table`";
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, [':keyword' => "%$keyword%"]);
        $sth->execute();

        return $sth->fetchAll();
    }
}
