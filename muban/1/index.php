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
    <meta http-equiv="Cache-Control" content="no-transform" /> 
    <meta name="applicable-device" content="pc,mobile" /> 
    <meta name="renderer" content="webkit" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
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
    <title><?php echo $config['erelcms_title']; ?></title>
    <meta name="description" content="<?php echo $config['erelcms_description']; ?>" />
    <meta name="keywords" content="<?php echo $config['erelcms_keywords']; ?>" />
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
    <div class="slides">
        <div id="slides" class="owl-carousel">

            <div class="slides_item" style="background-image:url(uploads/allimg/210619/1-2106191612310-L.jpg);">
                <a target="_self" title="<?php echo $config['erelcms_primary_keyword']; ?>"><?php echo $config['erelcms_primary_keyword']; ?></a>
            </div>

            <div class="slides_item" style="background-image:url(uploads/allimg/210619/1-2106191612130-L.jpg);">
                <a target="_self" title="html">html</a>
            </div>

        </div>
    </div>
    <main>
        <section class="home_about">

            <div class="inner">
                <div class="about_title">
                    <h3>关于我们</h3>
                    <h4>Abou Us</h4>
                </div>
                <div class="about_wrap">
                    <div class="left">
                        <div class="thumbnail">
                            <img src="skin/images/about.jpg" alt="关于我们" />
                        </div>
                    </div>
                    <div class="right">
                        <p><?php echo $config['erelcms_jianjie']; ?></p>
                        <p>&nbsp;</p>
                        <p class="more">
                            <a href="about.html">了解更多 <i>&gt;</i></a>
                        </p>
                    </div>
                </div>
            </div>

        </section>
        <section class="inner product_main">

            <div class="main_title">
                <h3>客户案例</h3>
                <h4>OUR CASE</h4>
            </div>
            <ul>

                <li>
                    <a href="<?php echo $config['erelcms_random_news_link1']; ?>" target="_self">
                        <div class="thumbnail">
                            <img alt="<?php echo $config['erelcms_random_news_title1']; ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image1']); ?>" />
                        </div>
                        <div class="info">
                            <h5>客户案例展示</h5>
                            <!--<div class="meta">[nav:name]</div>-->
                            <div class="intro"><?php echo htmlspecialchars($config['erelcms_news_description1']); ?></div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $config['erelcms_random_news_link2']; ?>" target="_self">
                        <div class="thumbnail">
                            <img alt="<?php echo $config['erelcms_random_news_title2']; ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image2']); ?>" />
                        </div>
                        <div class="info">
                            <h5>客户案例展示</h5>
                            <!--<div class="meta">[nav:name]</div>-->
                            <div class="intro"><?php echo htmlspecialchars($config['erelcms_news_description2']); ?></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $config['erelcms_random_news_link3']; ?>" target="_self">
                        <div class="thumbnail">
                            <img alt="<?php echo $config['erelcms_random_news_title3']; ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image3']); ?>" />
                        </div>
                        <div class="info">
                            <h5>客户案例展示</h5>
                            <!--<div class="meta">[nav:name]</div>-->
                            <div class="intro"><?php echo htmlspecialchars($config['erelcms_news_description3']); ?></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $config['erelcms_random_news_link4']; ?>" target="_self">
                        <div class="thumbnail">
                            <img alt="<?php echo $config['erelcms_random_news_title4']; ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image4']); ?>" />
                        </div>
                        <div class="info">
                            <h5>客户案例展示</h5>
                            <!--<div class="meta">[nav:name]</div>-->
                            <div class="intro"><?php echo htmlspecialchars($config['erelcms_news_description1']); ?></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $config['erelcms_random_news_link5']; ?>" target="_self">
                        <div class="thumbnail">
                            <img alt="<?php echo $config['erelcms_random_news_title5']; ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image5']); ?>" />
                        </div>
                        <div class="info">
                            <h5>客户案例展示</h5>
                            <!--<div class="meta">[nav:name]</div>-->
                            <div class="intro"><?php echo htmlspecialchars($config['erelcms_news_description5']); ?></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $config['erelcms_random_news_link6']; ?>" target="_self">
                        <div class="thumbnail">
                            <img alt="<?php echo $config['erelcms_random_news_title6']; ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image6']); ?>" />
                        </div>
                        <div class="info">
                            <h5>客户案例展示</h5>
                            <!--<div class="meta">[nav:name]</div>-->
                            <div class="intro"><?php echo htmlspecialchars($config['erelcms_news_description6']); ?></div>
                        </div>
                    </a>
                </li>
            </ul>
        </section>
        <section class="products_center">
            <div class="inner">

                <div class="main_title">
                    <h3>产品展示</h3>
                    <h4>PRODUCT</h4>
                </div>
                <ul>

                    <li>
                        <div class="li_wrap">
                            <a  title="不锈钢厨具" target="_self">
                                <div class="thumbnail">
                                    <img alt="不锈钢厨具" src="<?php echo $config['erelcms_random_image10']; ?>" />
                                </div>
                                <h5>不锈钢厨具</h5>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="li_wrap">
                            <a  title="不锈钢厨具" target="_self">
                                <div class="thumbnail">
                                    <img alt="不锈钢厨具" src="<?php echo $config['erelcms_random_image11']; ?>" />
                                </div>
                                <h5>不锈钢厨具</h5>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="li_wrap">
                            <a  title="不锈钢厨具" target="_self">
                                <div class="thumbnail">
                                    <img alt="不锈钢厨具" src="<?php echo $config['erelcms_random_image12']; ?>" />
                                </div>
                                <h5>不锈钢厨具</h5>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="li_wrap">
                            <a  title="电磁炉具" target="_self">
                                <div class="thumbnail">
                                    <img alt="电磁炉具" src="<?php echo $config['erelcms_random_image13']; ?>" />
                                </div>
                                <h5>电磁炉具</h5>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="li_wrap">
                            <a  title="电磁炉具" target="_self">
                                <div class="thumbnail">
                                    <img alt="电磁炉具" src="<?php echo $config['erelcms_random_image14']; ?>" />
                                </div>
                                <h5>电磁炉具</h5>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="li_wrap">
                            <a  title="电磁炉具" target="_self">
                                <div class="thumbnail">
                                    <img alt="电磁炉具" src="<?php echo $config['erelcms_random_image15']; ?>" />
                                </div>
                                <h5>电磁炉具</h5>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="li_wrap">
                            <a  title="电磁炉具" target="_self">
                                <div class="thumbnail">
                                    <img alt="电磁炉具" src="<?php echo $config['erelcms_random_image16']; ?>" />
                                </div>
                                <h5>电磁炉具</h5>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="li_wrap">
                            <a  title="燃气炉具" target="_self">
                                <div class="thumbnail">
                                    <img alt="燃气炉具" src="<?php echo $config['erelcms_random_image17']; ?>" />
                                </div>
                                <h5>燃气炉具</h5>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </section>
        <section class="inner home_news">

            <div class="home_title">
                <h3>新闻中心</h3>
                <h4>NEWS</h4>
                <span class="more"><a href="new.html" title="新闻中心" target="_self">更多<i>&gt;</i></a></span>
            </div>

            <ul>

                <li class="first">
                    <div class="thumbnail">
                        <a href="<?php echo htmlspecialchars($config['erelcms_news_link1']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title1']); ?>" target="_self">
                            <img alt="<?php echo htmlspecialchars($config['erelcms_news_title1']); ?>" src="<?php echo htmlspecialchars($config['erelcms_news_image1']); ?>" />
                        </a>
                    </div>
                    <h5><a href="<?php echo htmlspecialchars($config['erelcms_news_link1']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title1']); ?>" target="_self"><?php echo htmlspecialchars($config['erelcms_news_title1']); ?></a></h5>
                    <p><?php echo htmlspecialchars($config['erelcms_news_description1']); ?></p>
                    <p class="more">
                        <a href="<?php echo htmlspecialchars($config['erelcms_news_link1']); ?>" title="<?php echo htmlspecialchars($config['erelcms_news_title1']); ?>" target="_self">阅读详情<i>&gt;</i></a>
                    </p>
                </li>
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
        </section>
        <section class="home_contact">
            <div class="inner">
                <div class="right">
                    <h3>联系信息</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 地址：<?php echo $config['erelcms_address']; ?></li>
                        <li><i class="fas fa-phone-volume"></i> 电话：<?php echo $config['erelcms_phone']; ?></li>
                        <li><i class="fas fa-fax"></i> 传真：<?php echo $config['erelcms_phone']; ?></li>
                        <li><i class="fas fa-envelope"></i> 邮箱：<?php echo $config['erelcms_email']; ?></li>
                    </ul>
                </div>
                <div class="left">
                    <iframe class="ueditor_baidumap" src="" frameborder="0" width="100%" height="360"></iframe>
                </div>
            </div>
        </section>
        <section class="inner home_partners">
            <hgroup>

                <h3>我们的合作伙伴</h3>
                <p></p>

            </hgroup>
            <ul>

                <li><a title="合作伙伴1" target="_self"><img src="uploads/allimg/210619/1logo.jpg" alt="合作伙伴1" /></a></li>

                <li><a title="合作伙伴2" target="_self"><img src="uploads/allimg/210619/2logo.jpg" alt="合作伙伴2" /></a></li>

                <li><a title="合作伙伴3" target="_self"><img src="uploads/allimg/210619/3logo.jpg" alt="合作伙伴3" /></a></li>

                <li><a title="合作伙伴4" target="_self"><img src="uploads/allimg/210619/4logo.jpg" alt="合作伙伴4" /></a></li>

                <li><a title="合作伙伴5" target="_self"><img src="uploads/allimg/210619/5logo.jpg" alt="合作伙伴5" /></a></li>

                <li><a title="合作伙伴6" target="_self"><img src="uploads/allimg/210619/6logo.jpg" alt="合作伙伴6" /></a></li>

            </ul>
        </section>
    </main>
    <footer class="footer" style="margin-bottom: -2.5%; ">
        <div class="inner">
            <div class="links">
                <ul>
                    <li>友情链接 :</li>
                </ul>
            </div>
        </div>
    </footer>
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
