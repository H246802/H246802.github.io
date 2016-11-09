<?php
header("Content-Type: text/html; charset=utf-8");
include "config.php";

// 1. 连接数据库
$link = mysqli_connect(DB_HOST, DB_USER, DB_PWD);

// 2. 判断连接成功语法
if(mysqli_connect_errno($link)){
   exit(mysqli_connect_error($link));
}else{
//   echo '连接成功';
}
mysqli_set_charset($link,DB_CHARSET);

mysqli_select_db($link,DB_DATABASE);
?>