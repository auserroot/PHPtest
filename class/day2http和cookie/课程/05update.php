<?php
    /* 
        修改的sql语句
            ==> 想用php去操作数据库修改某一条数据的内容
            ==> 使用UPDATE关键字
            ==> sql语句
                --> UPDATE `表名` SET `字段` = 新值 WHERE 条件
                --> UPDATE `表名` SET `字段1` = 新值1, `字段2` = 新值2 WHERE 条件
    */


    // 处理中文乱码问题
    include "./base.php";
    
    // 1 连接数据库
    $conn = mysqli_connect('127.0.0.1','root','root','jd');
    // 2 执行sql语句
    $sql = "UPDATE `user` SET `username`='张三三',`password`='777' WHERE `username`='李四'";
    $res  = mysqli_query($conn,$sql);
    // 3 修改的结果不需要解析
    var_dump($res);
    // 4 断开连接
    mysqli_close($conn);

?>