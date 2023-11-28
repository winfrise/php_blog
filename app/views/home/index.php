
<style>
.media-thumb {
    width: 160px;
    height: 120px;
}


</style>

<main class="wrapper">


<div class="container" id="content-container">

    <div class="layui-row layui-col-space20">

      <main class="layui-col-md8">
        <!-- 轮播图Start -->
        <div class="layui-carousel" id="carousel">
          <div carousel-item>
            <div>
              <img src="https://cdn.demo.fastadmin.net/uploads/focus/1.jpg" />
            </div>
            <div>
              <img src="https://cdn.demo.fastadmin.net/uploads/focus/6.jpg" />
            </div>
            <div>
              <img src="https://cdn.demo.fastadmin.net/uploads/focus/25.jpg" />
            </div>
            <div>条目4</div>
            <div>条目5</div>
          </div>
        </div>
        <script>
          layui.use('carousel', function(){
            var carousel = layui.carousel;
            //建造实例
            carousel.render({
              elem: '#carousel'
              ,width: '100%' //设置容器宽度
              ,arrow: 'always' //始终显示箭头
              //,anim: 'updown' //切换动画方式
            });
          });
        </script>
        <!-- 轮播图End -->

            <div class="layui-panel index-gallary">
                <div class="layui-panel-header">
                    <h3 class="panel-title">
                        <span>热门图集</span>
                        <div class="more">
                            <a href="/product.html">查看更多</a>
                        </div>
                    </h3>

                </div>
                <div class="layui-panel-body">
                    <div class="related-article">
                        <div class="row">
                            <!-- S 热门图集 -->
                                                        <div class="col-sm-3 col-xs-6">
                                <a href="/smarthome/104.html" class="img-zoom">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="https://cdn.demo.fastadmin.net/uploads/20190327/393cf89c183ad1f896c916f0e623030a.png" alt="智能游戏WIFI无线手柄" class="embed-responsive-item">
                                    </div>
                                </a>
                                <h5>智能游戏WIFI无线手柄</h5>
                            </div>
                                                        <div class="col-sm-3 col-xs-6">
                                <a href="/wearable/105.html" class="img-zoom">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="https://cdn.demo.fastadmin.net/uploads/20190328/f2e2c700c82ecb8c1788980eac4df7ba.png" alt="智能WIFI无人机" class="embed-responsive-item">
                                    </div>
                                </a>
                                <h5>智能WIFI无人机</h5>
                            </div>
                                                        <div class="col-sm-3 col-xs-6">
                                <a href="/wearable/108.html" class="img-zoom">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="https://cdn.demo.fastadmin.net/uploads/20190328/30752b442c826ab7d3a63f1ddfb5d9ac.png" alt="米家互联网洗烘一体机" class="embed-responsive-item">
                                    </div>
                                </a>
                                <h5>米家互联网洗烘一体机</h5>
                            </div>
                                                        <div class="col-sm-3 col-xs-6">
                                <a href="/wearable/107.html" class="img-zoom">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="https://cdn.demo.fastadmin.net/uploads/20190328/36ca21cca109e0f60ba35de08ca4689d.png" alt="米家无线投影仪青春版" class="embed-responsive-item">
                                    </div>
                                </a>
                                <h5>米家无线投影仪青春版</h5>
                            </div>
                                                        <!-- E 热门图集 -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="layui-card">
                <div class="layui-card-header">
                    <h3 class="panel-title">
                        <span>最近更新</span>

                        <div class="more hidden-xs">
                            <ul class="list-unstyled list-inline">
                                <!-- E 栏目筛选 -->
                                                                <li><a href="/network.html">网络工具</a></li>
                                                                <li><a href="/media.html">媒体工具</a></li>
                                                                <li><a href="/app.html">应用软件</a></li>
                                                                <li><a href="/smarthome.html">智能家居</a></li>
                                                                <li><a href="/mobiledevice.html">移动设备</a></li>
                                                                <li><a href="/wearable.html">智能设备</a></li>
                                                                <!-- E 栏目筛选 -->
                            </ul>
                        </div>
                    </h3>
                </div>
                <div class="layui-card-body">
                    <div class="article-list">

        <!-- S 首页列表 -->
        <article class="article-item">
            <div class="media">
                <div class="media-left">
                    <a href="/hardware/34.html">
                        <div class="img-zoom">
                            <img class="media-thumb" src="https://cdn.demo.fastadmin.net/uploads/demo/demo2.jpg" alt="FastAdmin分布式存储如何保证微信AccessToken一致性">
                        </div>
                    </a>
                </div>
                <div class="media-body">
                    <h3 class="article-title">
                        <a href="/hardware/34.html" style="font-weight:bold;color:#162ceb;">FastAdmin分布式存储如何保证微信AccessToken一致性</a>
                    </h3>
                    <div class="article-intro">
                        在FastAdmin中进行微信开发时，FastAdmin中使用的EasyWechat在获取和缓存微信access_token默认采用的是文件进行缓存，如果我们服务端存在分布式部署时，此时我们在调用微信的相关接口时就会经常出现以下错误
                    </div>
                    <div class="article-tag">
                        <a href="/hardware.html" class="tag tag-primary">服务器</a>
                        <span itemprop="date">2018年04月17日</span>
                        <span class="hidden-xs" itemprop="likes" title="点赞次数"><i class="fa fa-thumbs-up"></i> 2028 点赞</span>
                        <span class="hidden-xs" itemprop="comments"><a href="/hardware/34.html#comments" target="_blank" title="评论数"><i class="fa fa-comments"></i> 1677</a> 评论</span>
                        <span class="hidden-xs" itemprop="views" title="浏览次数"><i class="fa fa-eye"></i> 19749 浏览</span>
                    </div>
                </div>
            </div>
        </article>

    <article class="article-item">
        <div class="gallery-article">
        <h3 class="article-title">
            <a href="/wearable/108.html">米家互联网洗烘一体机</a>
        </h3>
        <div class="row">
            <div class="layui-col-md3">
                <a href="/wearable/108.html" class="img-zoom">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img style="width: 165px; height: 124px;"  src="https://cdn.demo.fastadmin.net/uploads/20190328/30752b442c826ab7d3a63f1ddfb5d9ac.png" alt="米家互联网洗烘一体机" class="embed-responsive-item">
                    </div>
                </a>
            </div>
            <div class="layui-col-md3">
                <a href="/wearable/108.html" class="img-zoom">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img style="width: 165px; height: 124px;" src="https://cdn.demo.fastadmin.net/uploads/20190328/c9abe74b02cd5789f08bb47e5d18d1aa.png" alt="米家互联网洗烘一体机" class="embed-responsive-item">
                    </div>
                </a>
            </div>
            <div class="layui-col-md3">
                <a href="/wearable/108.html" class="img-zoom">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img style="width: 165px; height: 124px;"  src="https://cdn.demo.fastadmin.net/uploads/20190328/242c72f8f3d4515b045875d4093d4bfa.png" alt="米家互联网洗烘一体机" class="embed-responsive-item">
                    </div>
                </a>
            </div>
            <div class="layui-col-md3">
                <a href="/wearable/108.html" class="img-zoom">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img style="width: 165px; height: 124px;"  src="https://cdn.demo.fastadmin.net/uploads/20190328/c503015461309deefc8d75be6372bbe4.png" alt="米家互联网洗烘一体机" class="embed-responsive-item">
                    </div>
                </a>
            </div>
                    </div>
        <div class="media">
            <div class="media-body ml-0">
                <div class="article-intro">
                    小米近日正式发布米家互联网洗烘一体机10kg版。米家互联网洗烘一体机10kg版采用BLDC变频电机、1400高转速、一级能效、以及包含智能空气洗在内的21种洗涤模式，性能强劲、功能齐全。                </div>
                <div class="article-tag">
                    <a href="/wearable.html" class="tag tag-primary">智能设备</a>
                    <span itemprop="date">2019年03月28日</span>
                    <span class="hidden-xs" itemprop="likes" title="点赞次数"><i class="fa fa-thumbs-up"></i> 1751 点赞</span>
                    <span class="hidden-xs" itemprop="comments"><a href="/wearable/108.html#comments" target="_blank" title="评论数"><i class="fa fa-comments"></i> 1628</a> 评论</span>
                    <span class="hidden-xs" itemprop="views" title="浏览次数"><i class="fa fa-eye"></i> 6945 浏览</span>
                </div>
            </div>
        </div>
    </div>
    </article>

                                                <!-- E 首页列表 -->
                    </div>
                </div>
            </div>
        </main>

        <aside class="layui-col-md4">
            <div class="layui-card lasest-update">
                <!-- S 最近更新 -->
                <div class="layui-card-header">
                    <h3 class="panel-title">最新更新</h3>
                </div>
                <div class="layui-card-body">
                    <ul class="list-unstyled">
                                                <li>
                            <span>[<a href="/wearable.html">智能设备</a>]</span>
                            <a class="link-dark" href="/wearable/108.html" title="米家互联网洗烘一体机">米家互联网洗烘一体机</a>
                        </li>
                                                <li>
                            <span>[<a href="/wearable.html">智能设备</a>]</span>
                            <a class="link-dark" href="/wearable/107.html" title="米家无线投影仪青春版">米家无线投影仪青春版</a>
                        </li>
                                                <li>
                            <span>[<a href="/wearable.html">智能设备</a>]</span>
                            <a class="link-dark" href="/wearable/106.html" title="米家九号平衡车Plus">米家九号平衡车Plus</a>
                        </li>
                                                <li>
                            <span>[<a href="/wearable.html">智能设备</a>]</span>
                            <a class="link-dark" href="/wearable/105.html" title="智能WIFI无人机">智能WIFI无人机</a>
                        </li>
                                                <li>
                            <span>[<a href="/smarthome.html">智能家居</a>]</span>
                            <a class="link-dark" href="/smarthome/104.html" title="智能游戏WIFI无线手柄">智能游戏WIFI无线手柄</a>
                        </li>
                                                <li>
                            <span>[<a href="/mobiledevice.html">移动设备</a>]</span>
                            <a class="link-dark" href="/mobiledevice/103.html" title="高保真无绳WIFI耳机">高保真无绳WIFI耳机</a>
                        </li>
                                                <li>
                            <span>[<a href="/network.html">网络工具</a>]</span>
                            <a class="link-dark" href="/network/102.html" title="Royal TSX 1.4.6 好用的多终端工具">Royal TSX 1.4.6 好用的多终端工具</a>
                        </li>
                                                <li>
                            <span>[<a href="/network.html">网络工具</a>]</span>
                            <a class="link-dark" href="/network/101.html" title="vSSH 1.11.1 强大的多标签ssh工具">vSSH 1.11.1 强大的多标签ssh工具</a>
                        </li>
                                            </ul>
                </div>
                <!-- E 最近更新 -->
            </div>



<!-- S 热门资讯 -->
<div class="layui-card hot-article">
    <div class="layui-card-header">
        <h3 class="panel-title">推荐资讯</h3>
    </div>
    <div class="layui-card-body">
        <div class="media media-number">
            <div class="media-left">
                <span class="num tag">1</span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="/hardware/1.html" title="插件的URL如何使用自定义路由">插件的URL如何使用自定义路由</a>
            </div>
        </div>
        <div class="media media-number">
            <div class="media-left">
                <span class="num tag">2</span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="/hardware/3.html" title="将public中的index.php移动到项目根目录">将public中的index.php移动到项目根目录</a>
            </div>
        </div>
            <div class="media media-number">
            <div class="media-left">
                <span class="num tag">3</span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="/hardware/5.html" title="去掉FastAdmin中前台访问URL中的index">去掉FastAdmin中前台访问URL中的index</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">4</span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="/investment/9.html" title="使用PHPExcel进行服务端导出">使用PHPExcel进行服务端导出</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">5</span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="/investment/11.html" title="在PHP5中使用php think api一键生成API文档">在PHP5中使用php think api一键生成API文档</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">6</span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="/security/15.html" title="限制后台管理员只能同时在一个地方登录">限制后台管理员只能同时在一个地方登录</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">7</span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="/internet/21.html" title="使用表格的templateView实现一个图表渲染的功能">使用表格的templateView实现一个图表渲染的功能</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">8</span>
            </div>
            <div class="media-body">
                <a class="link-dark" href="/internet/22.html" title="FastAdmin插件开发教程之简明开发教程">FastAdmin插件开发教程之简明开发教程</a>
            </div>
        </div>
            </div>
</div>
<!-- E 热门资讯 -->

<div class="panel panel-blockimg">
    <a href="https://www.fastadmin.net/go/aliyun" rel="nofollow" title="FastAdmin推荐企业服务器" target="_blank">
        <img src="https://cdn.demo.fastadmin.net/uploads/store/aliyun-sidebar.png" class="img-responsive" alt="">
</a></div>

<!-- S 热门标签 -->
<div class="layui-card hot-tags">
    <div class="layui-card-header">
        <h3 class="panel-title">热门标签</h3>
    </div>
    <div class="layui-card-body">
        <div class="tags">
                        <a href="/t/耳返.html" class="tag"> <span>耳返</span></a>
                        <a href="/t/Podcast订阅.html" class="tag"> <span>Podcast订阅</span></a>
                        <a href="/t/CAD绘图.html" class="tag"> <span>CAD绘图</span></a>
                        <a href="/t/dropbox.html" class="tag"> <span>dropbox</span></a>
                        <a href="/t/Mac.html" class="tag"> <span>Mac</span></a>
                        <a href="/t/音频录制.html" class="tag"> <span>音频录制</span></a>
                        <a href="/t/视频转换器.html" class="tag"> <span>视频转换器</span></a>
                        <a href="/t/Sublime.html" class="tag"> <span>Sublime</span></a>
                        <a href="/t/博客写作.html" class="tag"> <span>博客写作</span></a>
                        <a href="/t/防火墙工具.html" class="tag"> <span>防火墙工具</span></a>
                        <a href="/t/云计算.html" class="tag"> <span>云计算</span></a>
                        <a href="/t/REST服务测试.html" class="tag"> <span>REST服务测试</span></a>
                        <a href="/t/铃声制作.html" class="tag"> <span>铃声制作</span></a>
                        <a href="/t/Chromebox.html" class="tag"> <span>Chromebox</span></a>
                        <a href="/t/远程访问.html" class="tag"> <span>远程访问</span></a>
                        <a href="/t/多标签ssh工具.html" class="tag"> <span>多标签ssh工具</span></a>
                        <a href="/t/动画软件.html" class="tag"> <span>动画软件</span></a>
                        <a href="/t/台式机.html" class="tag"> <span>台式机</span></a>
                        <a href="/t/屏幕录制.html" class="tag"> <span>屏幕录制</span></a>
                        <a href="/t/多终端工具.html" class="tag"> <span>多终端工具</span></a>
                        <a href="/t/在线视频下载.html" class="tag"> <span>在线视频下载</span></a>
                        <a href="/t/PDF编辑软件.html" class="tag"> <span>PDF编辑软件</span></a>
                        <a href="/t/YouTube视频.html" class="tag"> <span>YouTube视频</span></a>
                        <a href="/t/财务管理.html" class="tag"> <span>财务管理</span></a>
                        <a href="/t/字体.html" class="tag"> <span>字体</span></a>
                        <a href="/t/混合动力.html" class="tag"> <span>混合动力</span></a>
                        <a href="/t/电池.html" class="tag"> <span>电池</span></a>
                        <a href="/t/视频下载.html" class="tag"> <span>视频下载</span></a>
                        <a href="/t/音乐管理.html" class="tag"> <span>音乐管理</span></a>
                        <a href="/t/媒体演示.html" class="tag"> <span>媒体演示</span></a>
                    </div>
    </div>
</div>
<!-- E 热门标签 -->

<!-- S 推荐下载 -->
<div class="layui-card">
    <div class="layui-card-header">
        <h3 class="panel-title">推荐下载</h3>
    </div>
    <div class="layui-card-body">
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">1</span>
            </div>
            <div class="media-body">
                <a href="/app/44.html" title="Compressor 4.4.4 苹果官方出品视频解码格式转换工具">Compressor 4.4.4 苹果官方出品视频解码格式转换工具</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">2</span>
            </div>
            <div class="media-body">
                <a href="/app/47.html" title="Pikka 2.0.4 菜单栏屏幕取色器">Pikka 2.0.4 菜单栏屏幕取色器</a>
            </div>
        </div>
          <div class="media media-number">
            <div class="media-left">
                <span class="num tag">3</span>
            </div>
            <div class="media-body">
                <a href="/media/49.html" title="iShowU Instant 1.2.11 实时屏幕录制软件">iShowU Instant 1.2.11 实时屏幕录制软件</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">4</span>
            </div>
            <div class="media-body">
                <a href="/media/50.html" title="VideoProc 3.2(2019013001) 视频格式转换">VideoProc 3.2(2019013001) 视频格式转换</a>
            </div>
        </div>
        <div class="media media-number">
            <div class="media-left">
                <span class="num tag">5</span>
            </div>
            <div class="media-body">
                <a href="/media/51.html" title="RightFont 5.4.1(2474) 超级好用的字体管理工具">RightFont 5.4.1(2474) 超级好用的字体管理工具</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">6</span>
            </div>
            <div class="media-body">
                <a href="/media/52.html" title="SPlayerX 4.1.4 射手播放器">SPlayerX 4.1.4 射手播放器</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">7</span>
            </div>
            <div class="media-body">
                <a href="/media/54.html" title="Meta 1.9.2(2358) 音频元数据音乐标签信息编辑器">Meta 1.9.2(2358) 音频元数据音乐标签信息编辑器</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">8</span>
            </div>
            <div class="media-body">
                <a href="/media/57.html" title="Camtasia 2018.0.8(105822) 强大且易用的视频录制和剪辑软件">Camtasia 2018.0.8(105822) 强大且易用的视频录制和剪辑软件</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">9</span>
            </div>
            <div class="media-body">
                <a href="/media/60.html" title="Cinemagraph Pro 2.7.1 专业的动态图片与视频制作工具">Cinemagraph Pro 2.7.1 专业的动态图片与视频制作工具</a>
            </div>
        </div>
                <div class="media media-number">
            <div class="media-left">
                <span class="num tag">10</span>
            </div>
            <div class="media-body">
                <a href="/media/62.html" title="MacX Video Converter Pro 6.4.0(20181213) 视频转换器">MacX Video Converter Pro 6.4.0(20181213) 视频转换器</a>
            </div>
        </div>
            </div>
</div>


        </aside>
    </div>
</div>

</main>
