<?php
    //变量赋值
    $var2=2;
    echo '<hr/>',$var2;
    unset($var2);
    echo '$var2';
    //删除变量
    echo '<hr/>';
    //预定义变量（预定义变量都是数组）
    $_GET;//获取所有表单以get方式提交的数据；
    $_POST;//post提交的数据都会保存在此
    $_REQUEST;//get和post提交的都会保存
    $GLOBALS;//PHP中所有的全局变量
    $_SERVER;//服务器信息
    $_SESSION;//session会话数据
    $_COOKIE;//cookie会话数据
    $_ENV;//环境信息
    $_FILES;//用户上传的文件信息


    //可变变量
    //定义两个变量
    $a='b';
    echo '$a';
    $b='bb';
    echo'$$a';


    //常量
    //  const/constant，是一种在程序运行当中，不可改变的量（数据）；
    //   常量一旦定义，通常数据不可改变（用户级别）

    //常量定义形式
    //  在使用定义常量的函数；define('常量名',常量值)
    //  使用函数定义常量：define；
    define('pi',3.13);
    echo(pi);
    //使用const关键字定义
    const pii=8.3;
    echo pii;
