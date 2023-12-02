<style>
.form-main {
  display: flex;
}
.form-main .form {
  width: 600px;
}
.form-main .video-box {
  margin-right: 15px;
  background: #000;
}
.form-main .video-box .video {
  width: 360px;
  height: 640px;
}

</style>

<div>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
      <legend><?php echo $form_title ?></legend>
    </fieldset>
    <div class="form-main">
      <div class="video-box">
        <video class="video" controls src="<?php echo $item['video_url'] ?>">
      </div>

      <form class="layui-form form" action="<?php if (isset($item['id'])) { ?>/admin/video/update<?} else { ?>/video/add<? } ?>" method="post">

      <?php if (isset($item['id'])): ?>
          <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
      <?php endif; ?>

      <div class="layui-form-item">
          <label class="layui-form-label">标题</label>
          <div class="layui-input-block">
          <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" value="<?php echo isset($item['title']) ? $item['title'] : '' ?>">
          </div>
      </div>

      <div class="layui-form-item">
          <label class="layui-form-label">名称</label>
          <div class="layui-input-block">
          <input type="text" name="name" lay-verify="title" autocomplete="off" placeholder="请输入名称" class="layui-input" value="<?php echo isset($item['title']) ? $item['title'] : '' ?>">
          </div>
      </div>

      <div class="layui-form-item">
          <label class="layui-form-label">Tags</label>
          <div class="layui-input-block">
          <input type="text" name="tags" lay-verify="tags" autocomplete="off" placeholder="请输入标签" class="layui-input" value="<?php echo isset( $item['tags']) ? $item['tags'] : '' ?>">
          </div>
      </div>

      <div class="layui-form-item">
          <label class="layui-form-label">video_url</label>
          <div class="layui-input-block">
          <input type="text" name="video_url" lay-verify="video_url" autocomplete="off" placeholder="请输入标签" class="layui-input" value="<?php echo isset($item['video_url']) ? $item['video_url'] : '' ?>">
          </div>
      </div>

      <div class="layui-form-item">
          <label class="layui-form-label">video_poster</label>
          <div class="layui-input-block">
          <input type="text" name="video_poster" lay-verify="video_poster" autocomplete="off" placeholder="请输入标签" class="layui-input" value="<?php echo isset($item['video_poster']) ? $item['video_poster'] : '' ?>">
          </div>
      </div>

      <div class="layui-form-item">
          <label class="layui-form-label">内容</label>
          <div class="layui-input-block">
          <textarea name="content" lay-verify="content" placeholder="请输入内容" class="layui-textarea"><?php echo isset($item['content']) ? $item['content'] : '' ?></textarea>
          </div>
      </div>

      <div class="layui-form-item">
          <label class="layui-form-label">后缀</label>
          <div class="layui-input-block">
          <input type="text" name="suffix" lay-verify="suffix" autocomplete="off" placeholder="请输入标签" class="layui-input" value="<?php echo isset($item['suffix']) ? $item['suffix'] : '' ?>">
          </div>
      </div>

      <div class="layui-form-item">
          <div class="layui-input-block">
          <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
          <button type="reset" class="layui-btn layui-btn-primary">重置</button>
          </div>
      </div>
      </form>
    </div>
</div>
