<?php

    /* 
        专门聊下php的数组
            + js里面
                ==> 数组:[1,32,3,4,3,43,...]
                ==> 对象:{name:'Jack',ageL18,....}
            + php里面
                ==> 关联型数组
                    + 等价于js里面的对象
                ==> 索引型数组
                    + 等价于js里面的数组
            + 索引型数组
                + 语法: $arr = array(数据1,数据2,数据3,....)
                + 按照索引下标进行排列
                + 如果想单独获取数组里面的某一个数据
                    ==> 数组名称[对应的索引]
            + 关联型数组
                + 语法: $arr = array(key1=>val1,key2=>val2,....)
                + 等价于js里面的对象
                + 注意:
                    ==> 不管是key还是val，需要引号包裹，单引号也行，双引号也行
                    ==> 不可以不包裹，如果不用引号包裹，会被当做变量来使用(报错)
                    ==> 中间的是 => 不是: 也不是=
                    ==> 数字和布尔值，不需要引号包裹，可以直接使用
                + 如果想单独获取关联型数组里面的某一项的值
                    ==> 数组名称['你先要获取的属性名']

            + 扩展知识点
                + in_array(key,$arr) 搜索数组中是否存在指定的值
                + count($arr) 计算数组长度
                + array_key_exists(key,$arr)  搜索数组中是否存在指定的键
                + unset($arr[key]) 删除数组中的指定元素




    */

    // 处理一下中文乱码问题
    header('content-type:text/html;charset=utf-8;');

    // 1 索引型数组
    // $arr = array(12,true,'hello',56);// 等价于[12,true,'hello',56]
    // print_r($arr);
    // echo "<br/>";
    // echo $arr[2];

    // 2 关联型数组
    $arr = array("name"=>"Jack","age"=>12);
    // print_r($arr);
    // echo $arr['name'];

    // php数组的方法--不用记忆
    // echo in_array('jack',$arr);//false,空白字符串
    // echo in_array('Jack',$arr);//true,1
    // echo count($arr);//2 
    // echo array_key_exists("name",$arr);//true,1
    // echo array_key_exists("old",$arr);//false,空白字符串
    // unset($arr['age']);
    // print_r($arr);

    // 循环数组
    // foreach($arr as $value){
    //     // $arr就是你要遍历的数组
    //     // $value就是循环到的那个数组元素
    //     echo $value;
    //     echo "<br/>";
    // }

    // foreach($arr as $key=>$value){
    //     // $arr就是你要遍历的数组
    //     // $key就是循环到的那一项的键名
    //     // $value就是循环到的那一项的值
    //     echo $key."对应的值是".$value."<br/>";
    // }


?>