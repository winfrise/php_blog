
<table id="demo" lay-filter="test"></table>

 <script>
 layui.use('table', function(){
   var table = layui.table;

   table.render({
     elem: '#demo'
     ,height: 312
     ,url: '/api/article/list'
     ,page: true
     ,cols: [[
       {field: 'id', title: 'ID', sort: true, fixed: 'left'}
       ,{field: 'title', title: '标题'}
       ,{field: 'tag', title: '标签'}
       ,{field: 'create_time', title: '创建时间'}
       ,{field: 'update_time', title: '更新时间'}
       ,{field: 'is_top', title: '是否置顶'}
       ,{field: 'status', title: '状态'}
     ]]
   });

 });
 </script>
