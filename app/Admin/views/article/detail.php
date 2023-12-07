
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
  <legend>
    <?php
    if ($type == '1') {
      echo '详情';
    } else if ($type == '2') {
      echo '编辑';
    } else {
      echo '添加';
    }
    ?>
  </legend>
</fieldset>

<form class="layui-form" lay-filter="form">

  <?php if (isset($item['id'])): ?>
    <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
  <?php endif; ?>

  <div class="layui-form-item">
    <label class="layui-form-label">标题</label>
    <div class="layui-input-block">
      <input type="text" name="title" value="<?php echo $item['title'] ?>" <?php echo $type == '1' ? 'disabled' : '' ?> lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">置顶</label>
    <div class="layui-input-block">
      <input type="checkbox" name="is_top" <?php echo $type == '1' ? 'disabled' : '' ?> value="1" lay-skin="switch" lay-text="ON|OFF">
    </div>
  </div>

  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">简介</label>
    <div class="layui-input-block">
      <textarea placeholder="请输入简介" <?php echo $type == '1' ? 'disabled' : '' ?> class="layui-textarea" name="intro"></textarea>
    </div>
  </div>


  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">内容</label>
    <div class="layui-input-block">
      <textarea placeholder="请输入内容" <?php echo $type == '1' ? 'disabled' : '' ?> class="layui-textarea" name="content"><?php echo $item['content'] ?></textarea>
    </div>
  </div>

  <div class="layui-form-item">
    <div class="layui-input-block">
      <button type="button" class="layui-btn layui-btn-normal" id="LAY-component-form-setval">赋值</button>
      <button type="button" class="layui-btn layui-btn-normal" id="LAY-component-form-getval">取值</button>
      <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">立即提交</button>
    </div>
  </div>
</form>

<script>
layui.use(['form', 'jquery'], function(){
  let form = layui.form
  let layer = layui.layer
  let $ = layui.jquery


  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '标题至少得5个字符啊';
      }
    }
  });


  // 监听提交
  form.on('submit(formSubmit)', function(data){
    $.ajax({
      url: '/api/article/add',
      type: 'POST',
      data: data.field,
      success: function () {
        layer.msg('成功')
      },
      error: function (err) {
        layer.msg('失败')
      }
    })
    return false;
  });

  //表单赋值
  layui.$('#LAY-component-form-setval').on('click', function(){
    form.val('form', {
      "username": "贤心" // "name": "value"
      ,"password": "123456"
      ,"interest": 1
      ,"like[write]": true //复选框选中状态
      ,"close": true //开关状态
      ,"sex": "女"
      ,"desc": "我爱 layui"
    });
  });

  //表单取值
  layui.$('#LAY-component-form-getval').on('click', function(){
    var data = form.val('form');
    alert(JSON.stringify(data));
  });

});
</script>
