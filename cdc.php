<?php

/*

这是一个可选的配置文件
这个文件的作用是使"tinyfilemanager.php"的更新更加容易
所以你可以
-可自由删除此文件，并将"tinyfilemanager.php"配置为单文件应用程序
或
-在这个文件中放入所有你想要的静态配置和忘记配置的"tinyfilemanager.php"

*/

//用登录/密码认证 
//设置true/false来启用/禁用它
// 独立于IP白名单和黑名单
$use_auth = true;


//用登录/密码认证
//设置true/false来启用/禁用它
// 独立于IP白名单和黑名单
$use_auth = true;

// 登录用户名和密码
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// 生成安全密码哈希 - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'admin' => '2y$10$/K.hjNr84lLNDt8fTXjoI.DBp6PpeyoJ.mGwrrLuCZfAwfSAGqhOW', //admin@123
    'chuyua' => '$2y$10$/.GYKLM6oE2vJwEYkC9Hh.kPMQxuLv9Zf3jaXC75D3PeCF1yHm9xG', //chuyu123
    'chuyub' => '$2y$10$/.GYKLM6oE2vJwEYkC9Hh.kPMQxuLv9Zf3jaXC75D3PeCF1yHm9xG',
    'chuyuc' => '$2y$10$/.GYKLM6oE2vJwEYkC9Hh.kPMQxuLv9Zf3jaXC75D3PeCF1yHm9xG',
    'chuyud' => '$2y$10$/.GYKLM6oE2vJwEYkC9Hh.kPMQxuLv9Zf3jaXC75D3PeCF1yHm9xG',
    'chuyue' => '$2y$10$/.GYKLM6oE2vJwEYkC9Hh.kPMQxuLv9Zf3jaXC75D3PeCF1yHm9xG',
);

//设置应用程序主题
//设置 - "light"和"dark"
$theme = 'light';

// 只读用户
// 例如数组('user', 'guest', ...)
$readonly_users = array(
);

// 在View的页面上启用highlight.js (https://highlightjs.org/)
$use_highlightjs = true;

// highlight.js样式
// 对于深色主题，使用'ir-black'
$highlightjs_style = 'vs';

// 在view的页面上启用ace.js (https://ace.c9.io/) 
$edit_files = true;

// date()和time()的默认时区
// Doc - http://php.net/manual/en/timezones.php
$default_timezone = 'Etc/UTC'; // UTC

// 文件管理器的根路径
//使用目录的绝对路径，即：'/var/www/folder'或$_SERVER['DOCUMENT_ROOT'].'/folder'
$root_path = '/phpstudy_pro/WWW';

// 文件管理器中链接的根目录，相对于$http_host变体：''，'path/to/subfolder'
// 如果$root_path不在服务器文档根目录下，将无法工作
$root_url = '';

// 服务器主机名如果错误，可以手动设置
$http_host = $_SERVER['HTTP_HOST'];

// 用户专用目录
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
$directories_users = array(    
    'admin' => '/phpstudy_pro/WWW',
    'chuyua' => '/phpstudy_pro/WWW',
    'chuyub' => '/phpstudy_pro/WWW/127.0.0.4',
    'chuyuc' => '/phpstudy_pro/WWW',
    'chuyud' => '/phpstudy_pro/WWW',
    'chuyue' => '/phpstudy_pro/WWW',
);
// iconv的输入编码
$iconv_input_encoding = 'UTF-8';

// date()格式的文件修改日期
// Doc - https://www.php.net/manual/en/function.date.php
$datetime_format = 'd.m.y H:i';

// 允许创建和重命名文件的文件扩展名
// 例如'txt,html,css,js'
$allowed_file_extensions = '';

// 允许上传文件的文件扩展名
// 例如'gif,png,jpg,html,txt'
$allowed_upload_extensions = '';

// Favicon路径这可以是一个.PNG图片的完整网址，也可以是一个基于文档根目录的路径
// 完整的路径，例如：http://example.com/favicon.png
// 本地路径，例如 images/icons/favicon.png
$favicon_path = '?img=favicon';

// 要从列表中排除的文件和文件夹
// 例如 array('myfile.html', 'personal-folder', '*.php', ...)
$exclude_items = array();

// 在线办公文件查看器
// Availabe规则是"google"、"microsoft"或false
// google => 使用Google Docs Viewer查看文档
// microsoft => 使用Microsoft Web Apps Viewer查看文档
// false => 禁用在线文档查看器
$online_viewer = 'microsoft';

// 粘性导航栏
// true => 启用粘性页眉
// false => 禁用粘性头
$sticky_navbar = true;


// 最大上传文件大小
$max_upload_size_bytes = 2048;

// 可能的规则是"OFF"、"AND"或"OR"
// OFF => 不检查连接IP，默认为OFF
// AND => 连接必须在白名单上，而不是在黑名单上
// OR => 连接必须在白名单上，或者不在黑名单上
$ip_ruleset = 'OFF';

// 是否应该通知用户他们的阻止？
$ip_silent = true;

// IP地址，包括IPv4和IPv6
$ip_whitelist = array(
    '127.0.0.1',      //本地ipv4
    '::1'             //本地IPv6
);

// IP地址，包括IPv4和IPv6
$ip_blacklist = array(
    '0.0.0.0',       //不可路由的meta ipv4
    '::'             //不可路由的ipv6元数据
);

?>
