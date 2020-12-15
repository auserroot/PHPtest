<?php
    /* 
        查询的sql语句
            ==> 就是想用php去操作数据库查询一些数据内容
            ==> 使用SELECT 关键字
            ==> 查询的语法
                1 SELECT * FROM `表名`
                    -> 查询这个表里面的所有数据
                2 SELECT * FROM `表名` WHERE 条件
                    -> 根据我们的条件查询数据库里面的数据
                3 SELECT * FROM `表名` WHERE 条件1 AND 条件2
                    -> 根据两个条件来查询，两个条件都要满足
                4 SELECT * FROM `表名` WHERE 条件1 OR 条件2
                    -> 根据两个条件来查询，两个条件满足一个就可以了
                5 SELECT * FROM `表名` WHERE 字段 LIKE '%关键字%'
                    -> 查询数据里面指定指定包含某一个关键字的数据
    */


    /* 
        登录
            ==> 前端
            ==> 后端
                ==> 接收到前端传递来的用户名和密码
                ==> 查询收据库是否存在该用户名和密码
                ==> 把查询结果发送给前端
            ==> 前端
    */

    // 处理中文乱码问题
    include "./base.php";
    // 接收到前端传递来的用户名和密码
    $username ="赵柳1";
    $pw = "666666";

    // 1 连接数据库
    $conn = mysqli_connect('127.0.0.1','root','root','jd');
    // 2 执行sql语句
    $sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$pw'";
    $res = mysqli_query($conn,$sql);// $res:sql语句出现错误，才是false
    
    // 3 解析查询结果
    $data = mysqli_fetch_all($res);
    if($data){
        // echo "登录成功";
        $arr = array('code'=>1);
        echo json_encode($arr);
    }else{
        // echo "登录失败";
        $arr = array('code'=>0);
        echo json_encode($arr);
    }
    // 4 断开连接
    mysqli_close($conn);
?>