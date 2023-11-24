

<div>
    <form action="/resource/batchAdd" method="post">
        <button type="submit" class="layui-btn">全部添加</button>
    </form>
</div>

<script>
const form = document.createElement('form')
form.action = '/resource/add'
form.method = 'post'
form.submit()
</script>

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
    <?php foreach ($file_list as $key => $item): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $item['title'] ?></td>
            <td>
                <a href="/item/detail/<?php echo $item['name'] ?>" title="查看详情">
                    <?php echo $item['name'] ?>
                </a>
            </td>
            <td><?php echo $item['suffix'] ?></td>
            <td>
                <?php foreach (explode(',', $item['tags']) as $tag): ?>
                    <span><?php echo $tag ?></span>
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