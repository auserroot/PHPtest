<?php
    /* 
        插入的sql语句
            ==> 插入就是想用php对数据库进行数据插入操作(注册)
            ==> 使用 INSERT 关键字
            ==> 一共有两种语法
                1 INSERT INTO `表名` VALUES(数据1,数据2,数据3,...)
                    ==> 按照你数据库里面字段的顺序插入的
                    ==> id我们可以不写直接写null,会自动增长
                    ==> INSERT INTO `user` VALUES (null,'韩梅梅','111111')
                2 INSERT INTO `表名` (字段1,字段2,...) VALUES (数据1,数据2,...)
                    ==> 按照你书写的字段添加
                    ==> 只添加某些字段的内容，剩下的稍后完善的时候再做
                    ==> INSERT INTO `user` (`password`) VALUES ('李磊')
            ==> $res为false的时候
                ==> 表示的是sql语句有错误
                ==> 第一种方式的时候，必须要完全按照数据库里面的字段数量添加
                ==> 第二种方式的时候，字段和数据库不匹配的时候会报错

    */

    /* 
    注册
        + 前端
            ==> 通过页面上绑定事件的方式获取用户填写的用户名和密码
            ==> 当用户点击注册的时候，把用户名和密码传递给后端
        + 后端
            ==> 接收到前端传递来的用户名和密码
            ==> 把用户名和密码存储在数据库里面
            ==> 把存储成功或者失败的信息发送给前端
        + 前端
            ==> 接收后端给回来的反馈信息
            ==> 根据反馈信息告诉用户注册成功还是失败
        + 整个流程
            前端-->后端-->数据库-->后端-->前端
    */

    // 1 接收到前端传递来的用户名和密码
    $username = "lucy";
    $pw = "123456";
    // 2 把用户名和密码存储在数据库里面
    // 2.1 连接数据库
    $conn = mysqli_connect('127.0.0.1','root','root','jd');
    // 2.2 执行sql语句
    $sql = "INSERT INTO `user` (`username`,`password`) VALUES ('$username','$pw')";
    $res = mysqli_query($conn,$sql);
    // 2.3 插入的结果是布尔值,不需要解析
    // 2.4 断开链接
    mysqli_close($conn);

    // 3 把存储成功或者失败的信息发送给前端
    var_dump($res);
?>