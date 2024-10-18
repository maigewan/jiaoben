<?php
// erelcms 配置文件
// 本文件用于存储网站的基本配置信息，例如TDK（标题、描述、关键词）等信息

$config = [
    // 网站基本信息
    'erelcms_title' => 'maige 演示网站',             // 网站标题
    'erelcms_description' => '这是maige的演示网站。',  // 网站描述
    'erelcms_keywords' => 'CMS, PHP, ErelCMS',          // 网站关键词
    'erelcms_phone' => '13545114877',                  // 手机
    'erelcms_email' => 'maige@maige.cm',            // 邮箱
    'erelcms_address' => '我是如来佛祖玉皇大帝观音菩萨指定取西经特派使者花果山水帘洞齐天大圣孙悟空阿的地址！',  // 地址
    'erelcms_primary_keyword' => '超级无敌',         // 主优化词
    'erelcms_main_keyword_pinyin' => '@zuijiajianzhangongju', // 当前主优化词的中文拼音
    'erelcms_established_year' => '2020',               // 建站时间
    'erelcms_qq' => '3352411',                        // QQ
    'erelcms_current_url' => 'https://m.ymaigei.com',      // 当前 URL
    'erelcms_beianhao' => 'ICP备12345678号', // 网站备案号
    'erelcms_jianjie' => '公司简介', // 公司简介
    
    // 网站SEO设置
    'erelcms_enable_seo_friendly_urls' => true,         // 是否启用SEO友好的URL
    'erelcms_pagination_limit' => 10,                   // 每页显示文章数量
    'erelcms_og_image' => '/img/og-default.jpg',        // 默认Open Graph分享图像
    'erelcms_og_site_name' => 'maige 官方网站',        // Open Graph网站名称

    // 安全设置
    'erelcms_enable_captcha' => true,                   // 是否启用验证码
    'erelcms_session_lifetime' => 3600,                 // 用户Session有效时长（秒）
    'erelcms_cookie_secure' => true,                    // 是否启用安全Cookie传输

    // 多语言支持
    'erelcms_default_language' => 'zh',                 // 默认语言
    'erelcms_supported_languages' => ['zh', 'en'],      // 支持的语言列表

    // 主题设置
    'erelcms_theme' => 'default',                       // 当前启用的主题

    // 性能优化
    'erelcms_enable_cache' => true,                     // 是否启用缓存
    'erelcms_cache_lifetime' => 600,                    // 缓存有效时长（秒）
    'erelcms_cdn_url' => '/',     // CDN加速的URL

    // 开发者设置
    'erelcms_debug_mode' => false,                      // 是否启用调试模式
    'erelcms_logging_level' => 'error',                 // 日志记录级别，可选：'info', 'warning', 'error'
];

// 引入 news_feed.php 文件来动态生成新闻数据
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/news_feed.php';


return $config;
