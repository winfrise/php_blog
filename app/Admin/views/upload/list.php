<div class="layui-col-xs12">
  <button class="layui-btn">上传</button>

  <table class="layui-table" lay-data="{
    height:315,
    url:'/api/upload/list',
    page:true
  }">
    <thead>
      <tr>
        <th lay-data="{field:'id', width:80, sort: true}">ID</th>
        <th lay-data="{field:'username', width:80}">用户名</th>
        <th lay-data="{field:'sex', width:80, sort: true}">性别</th>
        <th lay-data="{field:'city'}">城市</th>
        <th lay-data="{field:'sign'}">签名</th>
        <th lay-data="{field:'experience', sort: true}">积分</th>
        <th lay-data="{field:'score', sort: true}">评分</th>
        <th lay-data="{field:'classify'}">职业</th>
      </tr>
    </thead>
  </table>
</div>
