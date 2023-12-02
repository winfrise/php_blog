<form action="" method="get" style="display: flex;">
    <input class="layui-input" style="width: 300px;" type="text" value="<?php echo $keyword ?>" name="keyword">
    <button type="submit" class="layui-btn">搜索</button>
    <a href="/admin/video/detail?action=add" class="layui-btn layui-btn-primary">新建</a>
</form>

<table class="layui-hide" id="test"></table>

<script type="text/html" id="control">
  <a href="/admin/video/detail?id={{= d.id}}">
    <button class="layui-btn layui-btn-sm">查看</button>
  </a>
  <a href="/admin/video/detail?id={{= d.id}}&action=edit">
    <button class="layui-btn layui-btn-sm">编辑</button>
  </a>
  <a href="/admin/video/delete?id={{= d.id}}">
    <button class="layui-btn layui-btn-sm">删除</button>
  </a>
</script>

<script>
layui.use('table', function(){
  var table = layui.table;

  table.render({
    elem: '#test',
    url: '/api/video/list',
    limit: 20,
    parseData: function(res){ //res 即为原始返回的数据
      return {
        "code": res.code, //解析接口状态
        "msg": res.message, //解析提示文本
        "count": res.data.total, //解析数据长度
        "data": res.data.list //解析数据列表
      };
    },
    request: {
      pageName: 'page_num' //页码的参数名称，默认：page
      ,limitName: 'page_size' //每页数据量的参数名，默认：limit
    },
    page: true,
    cellMinWidth: 80, //全局定义常规单元格的最小宽度，layui 2.2.1 新增
    cols: [[
      {field:'id', width:80, title: 'ID', sort: true}
      ,{field:'title', title: '视频标题'}
      ,{field:'video_url', title: '视频地址'}
      ,{field:'video_poster', title: '视频封面'}
      ,{field: 'tags', title: '标签', templet: function (row) {
        console.log(row)
        return row.tags.split(',').map(item => `<span class="layui-btn layui-btn-xs">${item}</span>`).join('')
      }}
      ,{field:'content', title: '内容'}
      ,{field:'suffix', width:60, title: '后缀'}
      ,{field:'create_time', title: '创建时间'}
      ,{field:'updated_time', title: '更新时间'}
      ,{fixed: 'right', title: '操作', templet: '#control'}
    ]]
  });
});
</script>
