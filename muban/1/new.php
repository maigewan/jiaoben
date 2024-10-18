<!-- 
    欲买桂花同载酒
    终不似少年游....
    
    TG: @maige50wan
    
    数据无价，支持正版。
-->
<?php
require_once __DIR__ . '/../config/config.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <meta name="applicable-device" content="pc,mobile" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="title" content="<?php echo $config['erelcms_title']; ?>" />
<meta itemprop="name" content="<?php echo $config['erelcms_title']; ?>">
<meta itemprop="description" content="<?php echo $config['erelcms_description']; ?>">
<meta property="og:url" content="<?php echo $config['erelcms_current_url']; ?>">
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta property="og:site_name" content="<?php echo $config['erelcms_primary_keyword']; ?>">
<meta property="article:author" content="<?php echo $config['erelcms_primary_keyword']; ?>" />
<meta name="twitter:site" content="<?php echo htmlspecialchars($config['erelcms_main_keyword_pinyin'], ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:title" content="<?php echo $config['erelcms_title']; ?>">
<meta name="twitter:description" content="<?php echo $config['erelcms_description']; ?>">
<meta name="twitter:image" content="<?php echo $config['erelcms_current_url']; ?>/logo.png">
<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link defer rel="icon" href="/favicon.png" type="image/png" />
    <title>新闻中心-<?php echo $config['erelcms_title']; ?></title>
    <meta name="keywords" content="<?php echo $config['erelcms_keywords']; ?>" />
    <meta name="description" content="{maigewan_suijimiaoshu}" />
    <script src="/maigewan.js" type="text/javascript"></script>
    <script src="/tongji.js" type="text/javascript"></script>
    <link href="skin/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="skin/css/style.css" media="screen" />
    <script type='text/javascript' src='skin/js/jquery.js'></script>
    <script type='text/javascript' src='skin/js/jquery-migrate.min.js'></script>
</head>
<body>
    <header class="header">
        <div class="inner header_top">
            <div class="language">
                <span><i></i></span>
                <a class="click" href="javascript:void(0);" id="StranLink">繁体中文</a>
                <span class="right"><i></i></span>
            </div>
        </div>
        <div class="inner header_btm">
            <div class="logo">
                <h1><a href="/" title="<?php echo $config['erelcms_title']; ?>"><?php echo $config['erelcms_title']; ?></a></h1>
            </div>
            <div class="nav_btn">
                <span></span>
            </div>
            <nav class="nav">
                <div class="menu">
                    <ul>
                        <li><a href="/">网站首页</a></li>

                        <li>
                            <a href="about.html">关于我们</a>
                        </li>

                        <li>
                            <a href="pro.html">产品展示</a>
                        </li>

                        <li>
                            <a href="case.html">客户案例</a>
                        </li>

                        <li>
                            <a href="solution.html">解决方案</a>
                        </li>

                        <li>
                            <a href="new.html" class="hover">新闻中心</a>
                        </li>

                        <li>
                            <a href="contact.html">联系我们</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <div class="banner" style="background-image:url(skin/images/news.jpg);"></div>
    <div class="inner container">
        <aside class="sidebar">
            <section class="side_menu">
                <h3>产品展示<i></i></h3>
                <ul>

                    <li><a href="">燃气炉具</a> </li>

                    <li><a href="">电磁炉具</a> </li>

                    <li><a href="">不锈钢厨具</a> </li>

                    <li><a href="">制冷保险类</a> </li>

                    <li><a href="">排烟净化</a> </li>

                    <li><a href="">食品机械</a> </li>

                    <li><a href="">保险蒸柜类</a> </li>

                    <li><a href="">洗碗机</a> </li>

                </ul>
            </section>
            <section class="widget">
                <div class="pic">
                    <img src="skin/images/contact.jpg" alt="联系信息" />
                </div>
                <div class="textwidget">
                    <hgroup class="wtitle">
                        <h3>联系信息</h3>
                    </hgroup>
                    <p>电话：<?php echo $config['erelcms_phone']; ?></p>
                    <p>传真：<?php echo $config['erelcms_phone']; ?></p>
                    <p>Q Q：<?php echo $config['erelcms_qq']; ?></p>
                    <p>邮箱：<?php echo $config['erelcms_email']; ?></p>
                    <p>公司地址：<?php echo $config['erelcms_address']; ?></p>
                </div>
            </section>
        </aside>
        <main class="main">
            <div class="main_top">
                <h1 class="page_title">新闻中心</h1>
                <div class="breadcrumb">
                    <i class="fas fa-home"></i><a href="/">首页</a>>><a href="new.html">新闻中心</a>
                </div>
            </div>
            <div class="news_top">
                <div id="news_top" class="owl-carousel">

                    <div class="news_item">
                        <figure class="thumbnail">
                            <a href="<?php echo htmlspecialchars($config['erelcms_news_link1']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title1']); ?>" target="_self"><img alt="<?php echo htmlspecialchars($config['erelcms_news_title1']); ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image1']); ?>" /></a>
                        </figure>
                        <h2><a href="<?php echo htmlspecialchars($config['erelcms_news_link1']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title1']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title1']); ?></a></h2>
                        <div class="intro">
                            <p><?php echo htmlspecialchars($config['erelcms_news_description1']); ?></p>
                        </div>
                        <div class="readmore">
                            <a href="<?php echo htmlspecialchars($config['erelcms_news_title1']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title1']); ?>" target="_self">查看详情 <i>&gt;</i></a>
                        </div>
                    </div>

                    <div class="news_item">
                        <figure class="thumbnail">
                            <a href="<?php echo htmlspecialchars($config['erelcms_news_link2']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title2']); ?>" target="_self"><img alt="<?php echo htmlspecialchars($config['erelcms_news_title2']); ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image2']); ?>" /></a>
                        </figure>
                        <h2><a href="<?php echo htmlspecialchars($config['erelcms_news_link2']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title2']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title2']); ?></a></h2>
                        <div class="intro">
                            <p><?php echo htmlspecialchars($config['erelcms_news_description2']); ?></p>
                        </div>
                        <div class="readmore">
                            <a href="<?php echo htmlspecialchars($config['erelcms_news_title2']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title2']); ?>" target="_self">查看详情 <i>&gt;</i></a>
                        </div>
                    </div>

                    <div class="news_item">
                        <figure class="thumbnail">
                            <a href="<?php echo htmlspecialchars($config['erelcms_news_link3']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title3']); ?>" target="_self"><img alt="<?php echo htmlspecialchars($config['erelcms_news_title3']); ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image3']); ?>" /></a>
                        </figure>
                        <h2><a href="<?php echo htmlspecialchars($config['erelcms_news_link3']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title3']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title3']); ?></a></h2>
                        <div class="intro">
                            <p><?php echo htmlspecialchars($config['erelcms_news_description3']); ?></p>
                        </div>
                        <div class="readmore">
                            <a href="<?php echo htmlspecialchars($config['erelcms_news_title3']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title3']); ?>" target="_self">查看详情 <i>&gt;</i></a>
                        </div>
                    </div>

                    <div class="news_item">
                        <figure class="thumbnail">
                            <a href="<?php echo htmlspecialchars($config['erelcms_news_link4']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title4']); ?>" target="_self"><img alt="<?php echo htmlspecialchars($config['erelcms_news_title4']); ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image4']); ?>" /></a>
                        </figure>
                        <h2><a href="<?php echo htmlspecialchars($config['erelcms_news_link4']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title4']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title4']); ?></a></h2>
                        <div class="intro">
                            <p><?php echo htmlspecialchars($config['erelcms_news_description4']); ?></p>
                        </div>
                        <div class="readmore">
                            <a href="<?php echo htmlspecialchars($config['erelcms_news_title4']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title4']); ?>" target="_self">查看详情 <i>&gt;</i></a>
                        </div>
                    </div>

                    <div class="news_item">
                        <figure class="thumbnail">
                            <a href="<?php echo htmlspecialchars($config['erelcms_news_link5']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title5']); ?>" target="_self"><img alt="<?php echo htmlspecialchars($config['erelcms_news_title5']); ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image5']); ?>" /></a>
                        </figure>
                        <h2><a href="<?php echo htmlspecialchars($config['erelcms_news_link5']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title5']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title5']); ?></a></h2>
                        <div class="intro">
                            <p><?php echo htmlspecialchars($config['erelcms_news_description5']); ?></p>
                        </div>
                        <div class="readmore">
                            <a href="<?php echo htmlspecialchars($config['erelcms_news_title5']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title5']); ?>" target="_self">查看详情 <i>&gt;</i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="news_list">
                <ul>

               <li class="list">
                    <a href="<?php echo htmlspecialchars($config['erelcms_news_link1']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title1']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title1']); ?></a>
                    <span><?php echo htmlspecialchars($config['erelcms_news_time1']); ?></span>
                </li>

                <li class="list">
                    <a href="<?php echo htmlspecialchars($config['erelcms_news_link2']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title2']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title2']); ?></a>
                    <span><?php echo htmlspecialchars($config['erelcms_news_time2']); ?></span>
                </li>

                <li class="list">
                    <a href="<?php echo htmlspecialchars($config['erelcms_news_link3']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title3']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title3']); ?></a>
                    <span><?php echo htmlspecialchars($config['erelcms_news_time3']); ?></span>
                </li>

                <li class="list">
                    <a href="<?php echo htmlspecialchars($config['erelcms_news_link4']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title4']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title4']); ?></a>
                    <span><?php echo htmlspecialchars($config['erelcms_news_time4']); ?></span>
                </li>

                <li class="list">
                    <a href="<?php echo htmlspecialchars($config['erelcms_news_link5']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title5']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title5']); ?></a>
                    <span><?php echo htmlspecialchars($config['erelcms_news_time5']); ?></span>
                </li>

                </ul>
                <style>
                    .pages {
                        clear: both;
                        padding: 20px 0;
                        font-size: 14px;
                        text-align: center;
                        overflow: hidden
                    }

                        .pages ul {
                            display: inline-block;
                            margin: 0 auto;
                            padding: 0
                        }

                            .pages ul a {
                                color: #555;
                                display: block;
                                padding: 2px 10px;
                                border: 1px solid #ddd;
                                float: left;
                                margin: 0 5px;
                                margin-bottom: 10px;
                            }

                                .pages ul a.page-num-current {
                                    background: #ddd;
                                }
                </style>
                <div class="pages">
                    <ul>
                        <a>共有6条数据</a>
                        <a href="new.html">首页</a>
                        <a href='javascript:;'>上一页</a>
                        <a href="new.html" class="page-num page-num-current">1</a>
                        <a href='javascript:;'>下一页</a>
                        <a href='new.html'>末页</a>
                    </ul>
                </div>
            </div>
        </main>
    </div>
    <footer class="footer">
        <div class="inner">
            <div class="copyright">
                <p>手机：<?php echo $config['erelcms_phone']; ?>&nbsp;&nbsp; 电话:<?php echo $config['erelcms_phone']; ?>&nbsp;&nbsp;EMAIL：<?php echo $config['erelcms_email']; ?></p>
                <p>公司地址：<?php echo $config['erelcms_address']; ?>&nbsp;&nbsp;</p>
                <p>Copyright © 2024 <?php echo $config['erelcms_title']; ?> All Rights Reserved.&nbsp;&nbsp;<a href="https://beian.miit.gov.cn/" rel="nofollow"></a></p>
            </div>
        </div>
        <div class="fixed_bg"></div>
        <div class="fixed_widget">
            <ul><li class="backtop"><a href="javascript:void(0);"><i></i></a></li></ul>
        </div>
    </footer>
    <script type='text/javascript' src='skin/js/transform.js'></script>
    <script type='text/javascript' src='skin/js/fastclick.js'></script>
    <script type='text/javascript' src='skin/js/owl.carousel.min.js'></script>
    <script type='text/javascript' src='skin/js/leonhere.js'></script>
</body>
</html>
