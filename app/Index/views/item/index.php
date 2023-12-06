<style>
  .layout {
    padding: 20px 40px;
  }
</style>

<div class="layout">
  <form action="" method="get">
      <input type="text" value="<?php echo $keyword ?>" name="keyword">
      <input type="submit" value="搜索">
  </form>

  <p><a href="/item/manage">新建</a></p>

  <table  class="layui-table" lay-even>
      <tr>
          <th>ID</th>
          <th>内容</th>
          <th>操作</th>
      </tr>
      <?php foreach ($items as $item): ?>
          <tr>
              <td><?php echo $item['id'] ?></td>
              <td>
                  <a href="/item/detail?id=<?php echo $item['id'] ?>" title="查看详情">
                      <?php echo $item['item_name'] ?>
                  </a>
              </td>
              <td>
                  <a href="/item/manage?id=<?php echo $item['id'] ?>">编辑</a>
                  <a href="/item/delete?id=<?php echo $item['id'] ?>">删除</a>
              </td>
          </tr>
      <?php endforeach ?>
  </table>
</div>
