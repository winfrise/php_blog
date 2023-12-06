
<table id="articleTable" lay-filter="tableFilter"></table>

<script type="text/html" id="control">
  <a href="/admin/article/detail?id={{= d.id}}&type=1" class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a>
  <a href="/admin/article/detail?id={{= d.id}}&type=2" class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">编辑</a>
  <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="delete">删除</a>
</script>

 <script>
 layui.use('table', function(){
  var table = layui.table;

  //监听工具条
  table.on('tool(tableFilter)', function(obj){
    var data = obj.data;
    if(obj.event === 'delete'){
      layer.confirm('真的删除行么', function(index){
        obj.del();
        layer.close(index);
      });
    }
  });

   table.render({
     elem: '#articleTable'
     ,height: 312
     ,url: '/api/article/list'
     ,parseData: function(res){ //res 即为原始返回的数据
        return {
          "code": res.code,
          "msg": res.message,
          "count": res.data.total,
          "data": res.data.list
        };
      }
     ,page: true
     ,cols: [[
       {field: 'id', title: 'ID', sort: true, fixed: 'left'}
       ,{field: 'title', title: '标题'}
       ,{field: 'tag', title: '标签'}
       ,{field: 'create_time', title: '创建时间'}
       ,{field: 'update_time', title: '更新时间'}
       ,{field: 'is_top', title: '是否置顶'}
       ,{field: 'status', title: '状态'}
       ,{field: 'control', title: '操作', toolbar: '#control'}
     ]]
   });

 });
 </script>
