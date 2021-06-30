<?php
// 实例化mysqli类
$mysqli = new mysqli();
// 连接服务器，并选择一个数据库
$mysqli->connect('10.5.2.244', 'root', '123456', 'sldshop',"33063");
//数据库报错信息
$error=mysqli_connect_error();
if($error){
    die('连接失败' . $error);
}
//设置数据库编码
mysqli_set_charset($mysqli, 'utf8');
//数据库增删改查操作；
$sql='select * from bbc_member where member_id =469';

//把sql语句从php端发送到myql数据库执行
$res=mysqli_query($mysqli,$sql);

// mysqli_fetch 获取数据库中的数据
// MYSQLI_ASSOC 要求返回的关联数组
$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
print_r($rows);
//关闭之前打开的数据库连接
mysqli_free_result($res);


