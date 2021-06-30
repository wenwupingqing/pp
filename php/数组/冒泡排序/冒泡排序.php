<?php
$arr=array(1,4,2,9,7,5,8);

for($j=0,$len=count($arr);$j<$len-1;$j++){
    if($arr[$j]>$arr[$j+1]){
        $tmep=$arr[$j];

        $arr[$j]=$arr[$j+1];
        $arr[$j+1]=$tmep;
    }
}
print_r($arr);