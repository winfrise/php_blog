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
        <div class="entry-meta">
            <ul>
                <li>本文分类：<a href="/wearable.html">智能设备</a></li>
                <li>本文标签：无</li>
                <li>浏览次数：<span>6943</span> 次浏览</li>
                <li>发布日期：2019-03-28 00:00:00</li>
                <li>本文链接：<a href="https://cms.demo.fastadmin.net/wearable/108.html">https://cms.demo.fastadmin.net/wearable/108.html</a></li>
            </ul>

            <ul class="article-prevnext">
                <li>
                    <span>上一篇 &gt;</span>
                    <a href="/wearable/107.html">米家无线投影仪青春版</a>
                </li>
            </ul>
</div>


    </main>
    <aside class="layui-col-md4">
      <?php include './app/views/author-card.php' ?>
      <?php include './app/views/hot-article.php' ?>
      <?php include './app/views/hot-tags.php' ?>
    </aside>
</div>