<?php
//模拟数据结构：栈和队列
$arr=array();
//栈：先压栈后出栈：都是从一端出来
//前面：array_shift/array_unshift
//后面：array_push/array_pop
//压栈
array_push($arr,1);
array_push($arr,2);
array_push($arr,3);
print_r($arr);
print_r("===========================\n");
//出栈
array_pop($arr);
echo print_r($arr);
print_r("===========================\n");
array_pop($arr);
echo print_r($arr);
print_r("===========================\n");
array_pop($arr);
echo print_r($arr);


