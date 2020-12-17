<?php

    /* 
        登录
            + 前端
                ==> 通过页面上绑定事件的方式获取用户填写的用户名和密码
                ==> 当用户点击登录的时候，把用户名和密码传递给后端
            + 后端
                ==> 接收到前端传递来的用户名和密码
                    ==> 在我们php里面有一些预定义变量
                    ==> php本身自带的变量
                    ==> 预定义变量里面有什么？
                        --> $_GET :可以接收前端通过GET请求传递的数据
                        --> $_POST:可以接收前端通过POST请求传递的数据
                        --> $_REQUEST:可以接收前端请求传递的数据
                        --> 这三个预定义的变量都是关联型数组
                        --> 存储的是前端传递的数据
                            ==> 前端可以通过该表单元素设置name属性传递数据，name属性设置的什么，就是关联数组的键
                            ==> 比如前端:<input type="text" value="请填写用户名" name="username">
                            ==> 后端通过: $_GET['username']就可以获取这个表单元素传递的数据
                ==> 把用户名和密码存储在数据库里面
                ==> 把存储成功或者失败的信息发送给前端
            + 前端
                ==> 接收后端给回来的反馈信息
                ==> 根据反馈信息告诉用户注册成功还是失败
            + 整个流程
                前端-->后端-->数据库-->后端-->前端
    */

    // 处理中文乱码问题
    include "./base.php";
    
    // 接收到前端传递来的用户名和密码
    $username = $_POST['username'];// Undefined index: username in F:\code\08login.php on line 34
    $pw = $_POST['pw'];// Undefined index: pw in F:\code\08login.php on line 35

    // 1 连接数据库
    $conn = mysqli_connect('127.0.0.1','root','root','jd');
    // 2 执行sql语句
    $sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$pw'";
    $res = mysqli_query($conn,$sql);// $res:sql语句出现错误，才是false
    
    // 3 解析查询结果
    $data = mysqli_fetch_all($res);
    if($data){
        // echo "登录成功";
        // 直接返回数据给前端
        $arr = array('code'=>1);
        echo json_encode($arr);

        // 跳转页面——页面重定向
        // header('location:./08购物车.html');

    }else{
        // echo "登录失败";
        // 直接返回数据给前端
        $arr = array('code'=>0);
        echo json_encode($arr);

        // 跳转页面——页面重定向
        // header('location:./08login.html');
    }
    // 4 断开连接
    mysqli_close($conn);

?>