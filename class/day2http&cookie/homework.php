<?php
    //引入base文件
    include "../php/base.php";
    //链接数据库
    $link = mysqli_connect('127.0.0.1','root','root','school');
    //操作
    // 1 查询全部数据
    // $sqlseall = "SELECT * FROM `student`";
    // $ser = mysqli_query($link,$sqlseall);
    // // print_r($ser);
    // //解析
    // $serr = mysqli_fetch_all($ser);
    // $jsonser = json_encode($serr);
    // print_r($jsonser);

    // 2 查询所有年龄大于 20 岁的同学
    // $sqlSeage = "SELECT * FROM `student` WHERE age>20";
    // $ser = mysqli_query($link,$sqlSeage);
    // // print_r($ser);
    // //解析
    // $serr = mysqli_fetch_all($ser);
    // $jsonser = json_encode($serr);
    // print_r($jsonser);

    // 3 查询所有名字里面带有 “三” 字， 并且成绩大于 80 分的同学
    // $sqlsCode = "SELECT * FROM `student` WHERE score>80 AND (`name` LIKE '%三%')";
    // $ser = mysqli_query($link,$sqlsCode);
    // // print_r($ser);
    // //解析
    // $serr = mysqli_fetch_all($ser);
    // $jsonser = json_encode($serr);
    // print_r($jsonser);

    // 4 删除所有年纪小于 19 岁 并且 成绩为 60 分以下的学员
    $sqlDCode = "DELETE FROM `student` WHERE `age`<19 AND `score`<60 ";
    $ser = mysqli_query($link,$sqlDCode);
    var_dump($ser);

    // 5 把 id 大于 950 的同学的成绩修改为 100 分
    $sqluCode = "UPDATE `student` SET `score` = 100 WHERE `id`>950";
    $ser = mysqli_query($link,$sqluCode);
    var_dump($ser);

    //6 添加一些学员到数据库里面（学员姓名成绩班级... 自定）
    $sqluCode = "INSERT INTO `student` VALUES  (null,'张章长',60,'男','1906',80)";
    $ser = mysqli_query($link,$sqluCode);
    var_dump($ser);
?>