
<?php

return array(

	//'配置项'=>'配置值'

	//数据库配置信息

	'DB_TYPE'   => 'mysql', // 数据库类型

	'DB_HOST'   => 'localhost', // 服务器地址

	'DB_NAME'   => 'pms', // 数据库名

	'DB_USER'   => 'root', // 用户名

	'DB_PWD'    => '', // 密码

	'DB_PORT'   => 3306, // 端口

	// 'DB_PREFIX' => 'think_', // 数据库表前缀 

	'DB_CHARSET'=> 'utf8', // 字符集

	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

	'SHOW_PAGE_TRACE' => TRUE, // 数据库调试信息

	'TMPL_PARSE_STRING'  =>array(

     '__JS__'     => __ROOT__.'/Public/js', // 增加新的JS类库路径替换规则

     '__CSS__'     => __ROOT__.'/Public/css', // 增加新的CSS类库路径替换规则

     '__PH__' 	=> __ROOT__.'/Public/photo',

     '__JSON__' 	=> __ROOT__.'/Public/json',

     '__IMG__' 	=> __ROOT__.'/Public/img',

	)

	

);