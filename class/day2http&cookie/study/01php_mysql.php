<?php

    // 0 处理中文乱码问题
    include "./base.php";

    // 1 建立和数据库的连接
    $conn = mysqli_connect('127.0.0.1','root','root','jd');

    // 2 执行sql语句
    $sql = "SELECT * FROM `user`";
    $res = mysqli_query($conn,$sql);
    
    // 3 解析查询结果
    $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
    $result = json_encode($data);
    print_r($result);

    // 4 断开连接
    mysqli_close($conn);


    // Warning: mysqli_fetch_all() expects parameter 1 to be mysqli_result, boolean given in F:\code\01php_mysql.php on line 14
    // 表示你的sql语句写错了
?>