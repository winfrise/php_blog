<table class="layui-hide" id="test"></table>


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
      ,{field:'video_url', width:80, title: '视频地址'}
      ,{field:'video_poster', width:80, title: '视频封面', sort: true}
      ,{field:'content', width:80, title: '内容'}
      ,{field:'create_time', title: '创建时间', width: '30%', minWidth: 100} //minWidth：局部定义当前单元格的最小宽度，layui 2.2.1 新增
      ,{field:'updated_time', title: '更新时间', sort: true}
      ,{field:'name', title: '视频名称', sort: true}
      ,{field:'title', title: '视频标题'}
      ,{field:'suffix', width:137, title: '后缀', sort: true}
    ]]
  });
});
</script>
