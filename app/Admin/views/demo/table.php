<table class="layui-hide" id="test"></table>


<script>
layui.use('table', function(){
  var table = layui.table;

  table.render({
    elem: '#test',
    url: '/api/video/list',
    parseData: function(res){ //res 即为原始返回的数据
      return {
        "code": res.code, //解析接口状态
        "msg": res.message, //解析提示文本
        "count": res.total, //解析数据长度
        "data": res.data.list //解析数据列表
      };
    }
    cellMinWidth: 80, //全局定义常规单元格的最小宽度，layui 2.2.1 新增
    cols: [[
      {field:'id', width:80, title: 'ID', sort: true}
      ,{field:'username', width:80, title: '用户名'}
      ,{field:'sex', width:80, title: '性别', sort: true}
      ,{field:'city', width:80, title: '城市'}
      ,{field:'sign', title: '签名', width: '30%', minWidth: 100} //minWidth：局部定义当前单元格的最小宽度，layui 2.2.1 新增
      ,{field:'experience', title: '积分', sort: true}
      ,{field:'score', title: '评分', sort: true}
      ,{field:'classify', title: '职业'}
      ,{field:'wealth', width:137, title: '财富', sort: true}
    ]]
  });
});
</script>
