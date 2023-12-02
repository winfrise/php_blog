<button type="button" class="layui-btn" id="upload-btn">
  <i class="layui-icon">&#xe67c;</i>上传图片
</button>

<script src="/static/build/layui.js"></script>
<script>
layui.use('upload', function(){
  var upload = layui.upload;

  //执行实例
  var uploadInst = upload.render({
    elem: '#upload-btn'
    ,url: '/api/upload/add'
    ,done: function(res){
      layer.msg('上传成功');
    }
    ,error: function(){
      layer.msg('上传失败');
    }
  });
});
</script>
