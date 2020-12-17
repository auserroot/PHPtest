<?php
    /* 
        php的输出语法
            + 因为php是一个后端语言，和前端语言不一样
                ==> 前端输出语法:console.log或者alert,就直接反应在浏览器上了
                ==> 后端的语法，是谁找后端要的就给谁
                    ==> 当浏览器朝php要的时候，那么php的输出语法就把内容给了浏览器
                    ==> 当js朝php要的时候，那么php的输出语法就把内容给了js
            + php里面的三种输出语法
                1 echo 输出内容
                2 print_r(输出内容)
                3 var_dump(输出内容)
            + 三种输出语法的详细区别
                1 echo  
                    --> 只能输出基本数据类型，复杂数据类型会报错
                    --> 遇到布尔值的时候，true会输出1，false会输出空白内容
                2 print_r
                    --> 可以输出所有数据类型
                    --> 遇到布尔值的时候，true会输出1，false会输出空白内容
                3 var_dump
                    --> 可以输出所有数据类型
                    --> 遇到布尔值会正常输出true输出true，false输出false
                    --> 并且会带有数据的类型和数据的信息
                


    */


    // 1 echo
    // 表示php要输出一个hello world字符串
    // echo "hello world";
    // echo "<br/>";

    // 2 print_r
    // print_r('hello world');
    // print_r('<br/>');

    // 3 var_dump
    // 会在输出的时候输出数据类型和数据的详细信息
    // var_dump('hello world');


    // 三种输出语法的详细区别
    $s1 = "hello world";
    $n1 = 100.224;
    $b1 = false;
    $arr = array(1,2,3,4,5,true);
   
    
    // 1 echo 
    // echo $s1;echo "<br/>";
    // echo $n1;echo "<br/>";
    // echo $b1;echo "<br/>";
    // echo $arr; // 会报错
    

    // 2 print_r
    // print_r($s1);echo "<br/>";
    // print_r($n1);echo "<br/>";
    // print_r($b1);echo "<br/>";
    // print_r($arr);echo "<br/>";

    // 3 var_dump
    // var_dump($s1);echo "<br/>";
    // var_dump($n1);echo "<br/>";
    // var_dump($b1);echo "<br/>";
    // var_dump($arr);echo "<br/>";


    // 4 print 类似 echo
    // print $s1;echo "<br/>";
    // print $n1;echo "<br/>";
    // print $b1;echo "<br/>";
    // print $arr;echo "<br/>";
?>  