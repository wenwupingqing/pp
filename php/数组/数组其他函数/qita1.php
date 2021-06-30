<?php
//队列:先排队，先出来，一端进，另外一端出
//后进前出：array_push/array_shift
//前进后出：array_unshift/array_pop
$arr=array();
//入队
array_unshift($arr,3);
array_unshift($arr,2);
array_unshift($arr,1);
print_r($arr);
//出队
echo array_pop($arr);
echo array_pop($arr);
echo array_pop($arr);
