<?php
//php数组遍历：foreach

//定义数组
$arr1=array(1,2,3,4,5,6,7);
//foreach 循环
foreach ($arr1 as $v){
    echo $v,'<br/>';
}

//获取下标
$arr2=array(10,20,30,40,50,60,70);
foreach ($arr2 as $key=>$value){
    echo 'key:',$key,'=>value:',$value,'<br/>';
}

//通过foreach 遍历一维元素
$arr3=array(
    0=>array('name'=>'tom','age'=>30),
    1=>array('name'=>'jim','age'=>28),
);

foreach($arr3 as $value){
    echo 'name=',$value['name'],'  and age=',$value['age'],'<br/>';
}

