<?php
    /* 
        php的json格式转换
            + 在js里面的json格式转换
                ==> json字符串转对象:JSON.parse(json字符串)
                ==> 对象转json字符串:JSON.stringify(对象)
            + php问什么要进行json格式转换
                ==> php里面的数据类型和js不同，要进行数据交互，需要统一数据类型
                ==> php里面的关联型数组是长的和js里面一样的
                ==> array("name"=>"zhangsan","age"=>18)
                ==> 可以正常传递给前端，但是前端不认识
                ==> 转换成一个中间商的样子，转换成一个大家都认识的东西
                    ==> 都认识的东西就是json格式的字符串
                    ==> 因为所有的语言json格式是一模一样的
                ==> 为了前后端交互方便
            + php转换json格式的两个方法
                1 把php的数据格式转换成json字符串的格式
                    ==> json_encode()
                    ==> 语法:json_encode(要转换的php数据格式)
                    ==> 返回值：转换好的json字符串
                2 把json字符串转换成php的数据格式
                    ==> json_decode()
                    ==> 语法:json_decode(json字符串)
                    ==> 返回值:转换成php的数据格式
    */

    // 处理一下中文乱码问题
    header('content-type:text/html;charset=utf-8;');

    // 0 准备一个php格式的数组
    $arr = array("name"=>"zhangsan","age"=>18);

    // 1 把php格式的数组转换成json格式字符串
    $jsonArr = json_encode($arr);
    echo $jsonArr;

    // 2 把json格式的数据转换成php格式的数据
    $newArr = json_decode($jsonArr);
    print_r($newArr);

    
?>