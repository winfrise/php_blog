
<div>
    <button type="button" id="add-all-btn">全部添加</button>
</div>

<table>
    <tr>
        <th>标题</th>
        <th>文件名</th>
        <th>后缀</th>
        <th>路径</th>
        <th>操作</th>
    </tr>
    <?php foreach ($file_list as $item): ?>
        <tr>
            <td><?php echo $item['title'] ?></td>
            <td>
                <a href="/item/detail/<?php echo $item['name'] ?>" title="查看详情">
                    <?php echo $item['name'] ?>
                </a>
            </td>
            <td><?php echo $item['suffix'] ?></td>
            <td><?php echo $item['path'] ?></td>
            <td>
                <a href="/item/manage/<?php echo $item['name'] ?>">编辑</a>
                <a href="/item/delete/<?php echo $item['name'] ?>">删除</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>