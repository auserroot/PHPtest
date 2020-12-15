<?php
    // 1 连接数据库
    $link = mysqli_connect('127.0.0.1','root','root','jd');

    // 2 执行sql语句
    // 查询全部数据
    // $sql = "SELECT * FROM `student`";
    // 查询所有年龄大于 20 岁的同学
    // $sql = "SELECT * FROM `student` WHERE `age`>20";
    // 查询所有名字里面带有 “三” 字， 并且成绩大于 80 分的同学
    // $sql = "SELECT * FROM `student` WHERE `name` LIKE '%三%' AND `score`>80";
    // 删除所有年纪小于 19 岁 并且 成绩为 60 分以下的学员
    // $sql = "DELETE FROM `student` WHERE `age`<19 AND `score`<60";
    // 把 id 大于 950 的同学的成绩修改为 100 分
    // $sql = "UPDATE `student` SET `score`=100 WHERE `id`>950";
    // 添加一些学员到数据库里面（学员姓名成绩班级... 自定）
    // $sql = "INSERT INTO `student` VALUES (null,'lucy',23,'女',2012,23)";
    // 修改所有同学的成绩都是原有成绩加10
    $sql = "UPDATE `student` SET `score`=`score`+10";

    $res = mysqli_query($link,$sql);

    // 3 解析查询结果
    // $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
    // echo json_encode($data);

    // 3 删除，插入，修改不需要解析，直接输出
    if($res){
        $arr = array('code'=>1);
        echo json_encode($arr);
    }else{
        $arr = array('code'=>0);
        echo json_encode($arr);
    }
    // 4 断开连接
    mysqli_close($link)
?>