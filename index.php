<?php
$host='0.0.0.0';
$port=9551;
$serv=new swoole_server($host,$port);

//当连接时启用

$serv->on('connect',function($serv,$fd){
	echo '已经连接';
});


$serv->on('receive',function($serv,$fd,$from_id,$data){
	echo "接受到数据";
	var_dump($data);
});


$serv->on('close',function($serv,$fd){

	echo '连接关闭';
});

$serv->start();
//服务器
