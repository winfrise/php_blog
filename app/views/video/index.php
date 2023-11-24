<form action="" method="get" style="display: flex;">
    <input class="layui-input" style="width: 300px;" type="text" value="<?php echo $keyword ?>" name="keyword">
    <button type="submit" class="layui-btn">搜索</button>
    <a href="/item/manage" class="layui-btn layui-btn-primary">新建</a>
</form>

<p></p>

<table class="layui-table">
    <tr>
        <th>序号</th>
        <th>标题</th>
        <th>文件名</th>
        <th>后缀</th>
        <th>标签</th>
        <th>路径</th>
        <th>操作</th>
    </tr>
    <?php foreach ($items as $key => $item): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $item['title'] ?></td>
            <td>
                <a href="/video/detail?id=<?php echo $item['id'] ?>" title="查看详情">
                    <?php echo $item['name'] ?>
                </a>
            </td>
            <td><?php echo $item['suffix'] ?></td>
            <td>
                <?php foreach (explode(',', $item['tags']) as $tag): ?>
                    <button type="button" class="layui-btn layui-btn-xs"><?php echo $tag ?></button>
                <?php endforeach ?>
            </td>
            <td><?php echo $item['video_url'] ?></td>
            <td>
                <a href="/item/manage/<?php echo $item['name'] ?>">编辑</a>
                <a href="/item/delete/<?php echo $item['name'] ?>">删除</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
