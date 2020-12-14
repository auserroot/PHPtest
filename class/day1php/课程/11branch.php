<?php
    /* 
        php的分支结构
            + 和js一样，有条件分支语句和循环分支语句
                ==> 条件分支
                    -> if(){}
                    -> if(){}else{}
                    -> switch(){}
                ==> 循环结构
                    -> while(){}
                    -> do{}while()
                    -> for(){}
    */

    // 处理一下中文乱码问题
    header('content-type:text/html;charset=utf-8;');

    // 0 准备一个变量
    $age = 17;

    // 1 分支语句
    if($age>=18){
        echo "成年人";
    }else{
        echo "未成年人";
    }


    // 2 循环结构
    $n = 0;
    // while循环
    while($n<10){
        echo $n;
        echo "<br/>";
        $n++;
    }
    echo "<br/>----------<br/>";
    // for循环
    for($i=10;$i<20;$i++){
        echo $i;echo "<br/>";
    }
?>