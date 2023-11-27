<style>
.wrapper {
    width: 1200px;
    margin: 0 auto;
}
.title {
    font-size: 16px;
    font-weight: bold;
    color: #666;
    line-height: 30px;
}
.video {
    width: 780px;
    height: 440px;
}
</style>

<div class="wrapper">
    <main class="layui-col-md8">
        <div class="title">
            <?php echo $item['title'] ?>
        </div>

        <video class="video" controls src="<?php echo $item['video_url'] ?>"></video>
    </main>
    <aside class="layui-col-md4">
      <?php include './app/views/author-card.php' ?>
      <?php include './app/views/hot-article.php' ?>
      <?php include './app/views/hot-tags.php' ?>
    </aside>
</div>