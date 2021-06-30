<?php
$servername='10.5.2.244';
$username='root';
$password='123456';
$database='sldshop';
$port='33063';

//创建连接
$con=new mysqli($servername,$username,$password,$database,$port);
//检测连接
echo '$con';
if($con->connect_error){
    die("连接失败：".$con->connect_error);
}else{
    echo "连接成功" ;
}

//设置数据库编码
mysqli_set_charset($con,'utf-8');
//数据库增删改查操作；
$sql='select * from bbc_member ';
//把sql语句冲php端发送到数据库执行
$res=mysqli_query($con,$sql);
//获取数据库中的数据
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);//转成数组，且返回第一条数据,当不是一个对象时候退出
print_r($row);
//释放结果集
mysqli_free_result($res);
//关闭之前打开的数据库连接
mysqli_close($con);