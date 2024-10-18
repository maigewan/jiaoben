<!-- 
    欲买桂花同载酒
    终不似少年游....
    
    TG: @maige50wan
    
    数据无价，支持正版。
-->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />  
    <meta name="applicable-device" content="pc,mobile" />       
    <meta name="renderer" content="webkit" />                   
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="title" content="<?php echo $config['erelcms_title']; ?>" /> 
    <meta itemprop="name" content="<?php echo $config['erelcms_title']; ?>"> 
    <meta itemprop="description" content="<?php echo $config['erelcms_description']; ?>"> 
    <meta property="og:url" content="<?php echo $config['erelcms_current_url']; ?>"> 
    <meta name="twitter:title" content="<?php echo $config['erelcms_title']; ?>"> 
    <meta name="twitter:description" content="<?php echo $config['erelcms_description']; ?>">
    <meta name="twitter:image" content="<?php echo $config['erelcms_current_url']; ?>/logo.png">
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"> 
    <link defer rel="icon" href="/favicon.png" type="image/png" /> 
    <meta property="og:image:width" content="600" /> 
    <meta property="og:image:height" content="315" /> 
    <meta property="og:site_name" content="<?php echo $config['erelcms_primary_keyword']; ?>"> 
    <meta property="article:author" content="<?php echo $config['erelcms_primary_keyword']; ?>" /> 
    <meta name="twitter:site" content="<?php echo htmlspecialchars($config['erelcms_main_keyword_pinyin'], ENT_QUOTES, 'UTF-8'); ?>"> 

    <title><?php echo $config['erelcms_primary_keyword']; ?></title>
    <meta name="keywords" content="<?php echo $config['erelcms_primary_keyword']; ?>" />
    <meta name="description" content="<?php echo $config['erelcms_primary_keyword']; ?>" />
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
                            <a href="new.html">新闻中心</a>
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

                    <li><a href="<?php echo $config['erelcms_random_news_link1']; ?>"><?php echo $config['erelcms_random_news_title1']; ?></a> </li>
                    <li><a href="<?php echo $config['erelcms_random_news_link2']; ?>"><?php echo $config['erelcms_random_news_title2']; ?></a> </li>
                    <li><a href="<?php echo $config['erelcms_random_news_link3']; ?>"><?php echo $config['erelcms_random_news_title3']; ?></a> </li>
                    <li><a href="<?php echo $config['erelcms_random_news_link4']; ?>"><?php echo $config['erelcms_random_news_title4']; ?></a> </li>
                    <li><a href="<?php echo $config['erelcms_random_news_link5']; ?>"><?php echo $config['erelcms_random_news_title5']; ?></a> </li>
                    <li><a href="<?php echo $config['erelcms_random_news_link6']; ?>"><?php echo $config['erelcms_random_news_title6']; ?></a> </li>
                    <li><a href="<?php echo $config['erelcms_random_news_link7']; ?>"><?php echo $config['erelcms_random_news_title7']; ?></a> </li>
                    <li><a href="<?php echo $config['erelcms_random_news_link8']; ?>"><?php echo $config['erelcms_random_news_title8']; ?></a> </li>

                </ul>
            </section>
            <section class="widget">
                <div class="pic">
                    <img src="/logo.png" alt="<?php echo $config['erelcms_title']; ?>" />
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
            <article class="post">
                <div class="postmeta">
                    <span>来源：<?php echo $config['erelcms_primary_keyword']; ?></span>
                    <span>发布时间：<?php echo $config['erelcms_news_current_time']; ?></span>
                </div>
                <div class="entry">
                    <div>
                        {wenzhangzhengwen}
                    </div>
                    <br />

                </div>
                <div class="post_navi">
                    <div class="left">
                        <i>&lt;</i><a href="<?php echo $config['erelcms_news_next_link1']; ?>"><?php echo $config['erelcms_news_next_title1']; ?></a>
                    </div>
                    <div class="right">
                        <i>&gt;</i><a href="<?php echo $config['erelcms_news_prev_link2']; ?>"><?php echo $config['erelcms_news_prev_title2']; ?></a>
                    </div>
                </div>
                <section class="related_news">
                    <h3>相关推荐</h3>
                    <ul>

                        <li><a href="<?php echo htmlspecialchars($config['erelcms_news_link10']); ?>" target="_self" title="<?php echo htmlspecialchars($config['erelcms_news_title10']); ?>"><i>&gt;</i><?php echo htmlspecialchars($config['erelcms_news_title10']); ?></a></li>

                        <li><a href="<?php echo htmlspecialchars($config['erelcms_news_link11']); ?>" target="_self" title="<?php echo htmlspecialchars($config['erelcms_news_title11']); ?>"><i>&gt;</i><?php echo htmlspecialchars($config['erelcms_news_title11']); ?></a></li>

                        <li><a href="<?php echo htmlspecialchars($config['erelcms_news_link12']); ?>" target="_self" title="<?php echo htmlspecialchars($config['erelcms_news_title12']); ?>"><i>&gt;</i><?php echo htmlspecialchars($config['erelcms_news_title12']); ?></a></li>

                        <li><a href="<?php echo htmlspecialchars($config['erelcms_news_link13']); ?>" target="_self" title="<?php echo htmlspecialchars($config['erelcms_news_title13']); ?>"><i>&gt;</i><?php echo htmlspecialchars($config['erelcms_news_title13']); ?></a></li>

                        <li><a href="<?php echo htmlspecialchars($config['erelcms_news_link14']); ?>" target="_self" title="<?php echo htmlspecialchars($config['erelcms_news_title14']); ?>"><i>&gt;</i><?php echo htmlspecialchars($config['erelcms_news_title14']); ?></a></li>

                        <li><a href="<?php echo htmlspecialchars($config['erelcms_news_link15']); ?>" target="_self" title="<?php echo htmlspecialchars($config['erelcms_news_title15']); ?>"><i>&gt;</i><?php echo htmlspecialchars($config['erelcms_news_title15']); ?></a></li>

                    </ul>
                </section>
            </article>
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
