<?php
//默认的代码空间：全局空间
$global='global area';
function display(){
    //局部变量（函数内部定义）
    $inner=__FUNCTION__;//局部变量
//访问全局变量
//    echo $global;  //不能访问
  //  echo $GLOBALS['global'];
    global  $global;  //全局存在
    echo $global;

    //定义变量：全局不存在
    global  $local;
    $local='inner';
}
//调用函数
display();



//全局空间访问局部变量
//echo $inner;//不能访问



