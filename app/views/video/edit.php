<div style="width: 600px">
    <!-- <form  <?php if (isset($item['id'])) { ?>
                action="/item/update/<?php echo $item['id'] ?>"
                <?php } else { ?>
                action="/item/add"
            <?php } ?>
        method="post">

        <?php if (isset($item['id'])): ?>
            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
        <?php endif; ?>
        <input type="text" name="value" value="<?php echo isset($item['item_name']) ? $item['item_name'] : '' ?>">
        <input type="submit" value="提交">
    </form> -->

                
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend>编辑</legend>
    </fieldset>
    
    <form class="layui-form" action="/video/update" method="post">

    <?php if (isset($item['id'])): ?>
        <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
    <?php endif; ?>

    <div class="layui-form-item">
        <label class="layui-form-label">标题</label>
        <div class="layui-input-block">
        <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" value="<?php echo $item['title'] ?>">
        </div>
    </div>
    
    <div class="layui-form-item">
        <label class="layui-form-label">Tags</label>
        <div class="layui-input-block">
        <input type="text" name="tags" lay-verify="tags" autocomplete="off" placeholder="请输入标签" class="layui-input" value="<?php echo $item['tags'] ?>">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">video_url</label>
        <div class="layui-input-block">
        <input type="text" name="video_url" lay-verify="video_url" autocomplete="off" placeholder="请输入标签" class="layui-input" value="<?php echo $item['video_url'] ?>">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">video_poster</label>
        <div class="layui-input-block">
        <input type="text" name="video_poster" lay-verify="video_poster" autocomplete="off" placeholder="请输入标签" class="layui-input" value="<?php echo $item['video_poster'] ?>">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">内容</label>
        <div class="layui-input-block">
        <textarea name="content" lay-verify="content" placeholder="请输入内容" class="layui-textarea" value="<?php echo $item['content'] ?>"></textarea>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">后缀</label>
        <div class="layui-input-block">
        <input type="text" name="suffix" lay-verify="suffix" autocomplete="off" placeholder="请输入标签" class="layui-input" value="<?php echo $item['suffix'] ?>">
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
 