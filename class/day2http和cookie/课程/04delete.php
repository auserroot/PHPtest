<?php

    /* 
        删除的sql语句
            ==> 删除就是想用php对数据库进行数据删除操作
            ==> 使用DELETE 关键字
            ==> sql语句
                --> DELETE FROM `表名` WHERE 条件
                --> 要从哪一个表删除条件是什么的数据
    */

    // 处理中文乱码问题
    include "./base.php";
    
    // 1 连接数据库
    $conn = mysqli_connect('127.0.0.1','root','root','jd');
    // 2 执行sql语句
    $sql = "DELETE FROM `user` WHERE `username`='张三'";
    $res  = mysqli_query($conn,$sql);
    // 3 删除的结果不需要解析
    var_dump($res);
    // 4 断开连接
    mysqli_close($conn);
?>