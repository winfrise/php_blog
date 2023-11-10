
<table>
    <tr>
        <th>ID</th>
        <th>内容</th>
        <th>操作</th>
    </tr>
    <?php foreach ($file_list as $item): ?>
        <tr>
            <td><?php echo $item['path'] ?></td>
            <td>
                <a href="/item/detail/<?php echo $item['name'] ?>" title="查看详情">
                    <?php echo $item['name'] ?>
                </a>
            </td>
            <td>
                <a href="/item/manage/<?php echo $item['name'] ?>">编辑</a>
                <a href="/item/delete/<?php echo $item['name'] ?>">删除</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
