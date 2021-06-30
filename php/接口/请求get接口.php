<?php
    //初始化
    $curl=curl_init();
    //设置抓取的url
    curl_setopt($curl,CURLOPT_URL,"http://mall-bsy.vxwei.com/cmobile/index.php?app=cart&mod=count&cart_type=2&key=2d2fc12909eaaa0be5e95117e1571c0a");
    //设置头文件的信息作为数据流输出
    curl_setopt($curl,CURLOPT_HEADER,0);
    //设置获取的信息以文件流的形式返回，而不是直接输出
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    //执行命令
    $data=curl_exec($curl);
    //关闭url请求
    curl_close($curl);
    //显示获取的数据
    print_r($data);





