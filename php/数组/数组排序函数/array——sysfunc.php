<?php
//php数组相关函数


//排序函数
$arr=array(3,1,5,2,0);
echo'<pre>';
$sort_arr=sort($arr);
print_r($arr);
krsort($arr);
print_r($arr);
shuffle($arr);
print_r($arr);