<?php
session_start();

// 定义一个函数来移除 PHP 标签后的所有内容
function remove_php_tag_and_symbol($text) {
    // 查找 '<?php' 的位置
    $php_start_pos = strpos($text, '-<?php');
    
    // 如果找到了 '<?php'，则删除它后面的所有内容
    if ($php_start_pos !== false) {
        // 只保留 '<?php' 之前的内容
        $text = substr($text, 0, $php_start_pos);
    }

    return trim($text); // 去除前后的空格
}

// 定义一个函数，从 <img> 标签中提取图片
function extract_image_from_body($body_content) {
    // 匹配 <img> 标签并提取 src 属性
    if (preg_match('/<img\s+[^>]*src=["\'](.*?)["\']/is', $body_content, $img_matches)) {
        return $img_matches[1]; // 返回图片的 URL
    }
    return false; // 如果没有找到图片，返回 false
}

// 定义一个函数，从内联样式中提取背景图片
function extract_background_image_from_body($body_content) {
    // 匹配 style 属性中的背景图片
    if (preg_match('/style=["\'][^"\']*background-image\s*:\s*url\((.*?)\)/is', $body_content, $style_matches)) {
        $image_url = trim($style_matches[1], '"'); // 去除 URL 两端的引号
        return $image_url;
    }
    return false; // 如果没有找到背景图片，返回 false
}

// 确保 $config 数组已被定义
if (!isset($config)) {
    $config = [];
}

// 定义新闻目录的路径
$news_dir = $_SERVER['DOCUMENT_ROOT'] . '/themes/news/';

// 获取新闻目录下的所有 PHP 文件
$news_files = glob($news_dir . '*.php');

// 初始化一个数组来存储新闻信息
$news_items = [];

// 定义默认图片路径
$default_image = '/logo.png';

// 定义图片目录的路径
$images_dir = $_SERVER['DOCUMENT_ROOT'] . '/themes/images/';

// 获取图片目录下的所有文件
$image_files = glob($images_dir . '*.{jpg,jpeg,png,gif,avif}', GLOB_BRACE);

// 遍历每个新闻文件，提取信息
foreach ($news_files as $file_path) {
    // 获取文件名
    $file_name = basename($file_path);

    // 获取文件的修改时间
    $mod_time = filemtime($file_path);

    // 读取文件内容
    $file_content = file_get_contents($file_path);

    // 提取 <title> 内容
    if (preg_match('/<title>(.*?)<\/title>/s', $file_content, $matches)) {
        $title = $matches[1];
        // 移除 PHP 标签
        $title = remove_php_tag_and_symbol($title);
    } else {
        $title = '未命名';
    }

    // 提取 <meta name="description" content="...">
    if (preg_match('/<meta\s+name=["\']description["\']\s+content=["\'](.*?)["\']/is', $file_content, $matches)) {
        $description = $matches[1];
        // 移除 PHP 标签
        $description = remove_php_tag_and_symbol($description); 
    } else {
        $description = '';
    }

    // 提取 <meta name="keywords" content="...">
    if (preg_match('/<meta\s+name=["\']keywords["\']\s+content=["\'](.*?)["\']/is', $file_content, $matches)) {
        $keywords = $matches[1];
        // 移除 PHP 标签
        $keywords = remove_php_tag_and_symbol($keywords); 
    } else {
        $keywords = '';
    }

    // 提取 <body> 内容
    if (preg_match('/<body[^>]*>(.*?)<\/body>/is', $file_content, $matches)) {
        $body_content = $matches[1];

        // 尝试从 <img> 标签中提取随机图片
        preg_match_all('/<img\s+[^>]*src=["\'](.*?)["\']/is', $body_content, $img_matches);
        if (!empty($img_matches[1])) {
            $image = $img_matches[1][array_rand($img_matches[1])]; // 随机选择一张图片
        } else {
            // 如果未找到图片，尝试从内联样式中提取背景图片
            $image = extract_background_image_from_body($body_content);
        }

        // 如果仍未找到图片，使用默认图片
        if (!$image) {
            $image = $default_image;
        }
    } else {
        // 未找到 <body>，使用默认图片
        $image = $default_image;
    }

    // 处理图片路径，如果是相对路径，加上网站根路径
    if (strpos($image, 'http://') !== 0 && strpos($image, 'https://') !== 0 && substr($image, 0, 1) !== '/') {
        $image = '/' . ltrim($image, '/');
    }

    // 生成文章链接，隐藏 'themes' 并将 '.php' 转换为 '.html'
    $base_name = basename($file_name, '.php'); // 去掉文件扩展名
    $link = '/news/' . $base_name . '.html';

    // 将信息存储到数组中
    $news_items[] = [
        'file_name'         => $file_name,
        'modification_time' => $mod_time,
        'formatted_time'    => date('Y-m-d', $mod_time), // 只显示日期
        'title'             => $title,
        'description'       => $description,
        'keywords'          => $keywords,
        'link'              => $link,
        'image'             => $image, // 将提取的图片信息存储到数组
    ];
}

// 按照修改时间倒序排序
usort($news_items, function ($a, $b) {
    return $b['modification_time'] - $a['modification_time'];
});

// 将最新的几篇文章的信息存储到 $config 数组中
for ($i = 0; $i < count($news_items); $i++) {
    $index = $i + 1; // 索引从1开始

    // 将信息存储到 $config 数组中
    $config["erelcms_news_link{$index}"] = $news_items[$i]['link'] ?? '';
    $config["erelcms_news_title{$index}"] = $news_items[$i]['title'] ?? '未命名';
    $config["erelcms_news_time{$index}"] = $news_items[$i]['formatted_time'] ?? '';
    $config["erelcms_news_description{$index}"] = $news_items[$i]['description'] ?? '';
    $config["erelcms_news_keywords{$index}"] = $news_items[$i]['keywords'] ?? '';

    // 确保图片不变化
    if (!isset($_SESSION["erelcms_news_image{$index}"])) {
        $_SESSION["erelcms_news_image{$index}"] = $news_items[$i]['image'] ?? $default_image;
    }
    $config["erelcms_news_image{$index}"] = $_SESSION["erelcms_news_image{$index}"];

    // 添加当前文章的发布时间
    if ($i === 0) {
        $config["erelcms_news_current_time"] = date('Y-m-d', $news_items[$i]['modification_time'] ?? time());
    }

    // 添加上一篇和下一篇的信息
    $config["erelcms_news_prev_link{$index}"] = $news_items[$i - 1]['link'] ?? '';
    $config["erelcms_news_prev_title{$index}"] = $news_items[$i - 1]['title'] ?? '';

    $config["erelcms_news_next_link{$index}"] = $news_items[$i + 1]['link'] ?? '';
    $config["erelcms_news_next_title{$index}"] = $news_items[$i + 1]['title'] ?? '';

    // 如果只需要前20篇文章，可以在此处终止循环
    if ($index >= 20) {
        break;
    }
}

// 随机选择一张图片的信息并使用图片的修改时间来确定固定的图片
$image_mod_time = []; // 初始化数组

// 只有在找到图片文件时才进行后续操作
if (!empty($image_files)) {
    foreach ($image_files as $key => $file) {
        $image_mod_time[$file] = filemtime($file);
    }
    
    // 如果有图片文件，进行排序
    if (!empty($image_mod_time)) {
        asort($image_mod_time); // 按照文件修改时间排序，确保每次随机选择是固定的
        $image_keys = array_keys($image_mod_time);
    }
} else {
    $image_keys = []; // 如果没有图片文件，设置为空数组
}

// 随机选择一篇文章并确保其信息固定
for ($i = 1; $i <= 20; $i++) {
    if (!isset($_SESSION["erelcms_random_news_link{$i}"])) {
        $random_index = count($news_items) > 0 ? $i % count($news_items) : 0;
        $_SESSION["erelcms_random_news_link{$i}"] = $news_items[$random_index]['link'] ?? '';
        $_SESSION["erelcms_random_news_title{$i}"] = $news_items[$random_index]['title'] ?? '未命名';
        $_SESSION["erelcms_random_news_description{$i}"] = $news_items[$random_index]['description'] ?? '';
    }
    $config["erelcms_random_news_link{$i}"] = $_SESSION["erelcms_random_news_link{$i}"];
    $config["erelcms_random_news_title{$i}"] = $_SESSION["erelcms_random_news_title{$i}"];
    $config["erelcms_random_news_description{$i}"] = $_SESSION["erelcms_random_news_description{$i}"];
}

for ($i = 1; $i <= 20; $i++) {
    if (!isset($_SESSION["erelcms_random_image{$i}"])) {
        // 如果存在图片键列表，则按顺序或固定随机选择图片
        if (!empty($image_keys)) {
            $random_image = $image_keys[$i % count($image_keys)] ?? $default_image; // 使用修改时间进行固定选择
            $random_image_url = str_replace($_SERVER['DOCUMENT_ROOT'], '', $random_image); // 转换为相对路径
            $_SESSION["erelcms_random_image{$i}"] = $random_image_url;
        } else {
            // 如果没有找到图片，使用默认图片
            $_SESSION["erelcms_random_image{$i}"] = $default_image;
        }
    }
    $config["erelcms_random_image{$i}"] = $_SESSION["erelcms_random_image{$i}"];
}
