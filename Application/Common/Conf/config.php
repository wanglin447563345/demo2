<?php
return array(
// 定义数据库
'DB_TYPE' => 'mysql', // 数据库类型
'DB_HOST' => '127.0.0.1', // 服务器地址
'DB_NAME' => 'thinkphp', // 数据库名
'DB_USER' => 'root', // 用户名
'DB_PWD' => '12345678', // 密码
'DB_PORT' => '3306', // 端口
'DB_PREFIX' => 'think_', // 数据库表前缀

// 调试工具
// 'SHOW_PAGE_TRACE' =>ture,


// 配置路径
'TMPL_PARSE_STRING' => array(
     '__CSS__' => '/demo2/Public/css/', // 增加新的CSS类库路径替换规则
     '__JS__' => '/demo2/Public/js/', // 增加新的JS类库路径替换规则
     '__IMG__' => '/demo2/Public/img/', // 增加新的IMG类库路径替换规则
)
);
