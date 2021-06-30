<?php
//类型判断
// 通过一组类型判断函数，来判断类型，最终返回这个变量所保存数据的数据类型，是一组以is_开头后面跟类型名字的函数：is_xxx(变量名)
$a='abc234';
var_dump(is_int($a));//false;
var_dump(is_string($a));//true;

//还有一组函数可以用来获以及设定数据的类型；
//Gettype(变量名):获取类型，得到的是类型的对应的字符串
//Settype(变量名，类型):设定数据类型，与强制转换不同
echo gettype($a);
echo "==================";
echo settype($a,int);
echo "==================";
echo gettype($a);
echo "==================";





