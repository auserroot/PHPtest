<?php
    //引入base文件
    include "../php/base.php";
    //链接数据库
    $link = mysqli_connect('127.0.0.1','root','root','school');
    //操作
    // 1 查询全部数据
    $sqlse = "SELECT * FROM `student`";
    $ser = mysqli_query($link,$sqlse);
    // print_r($ser);
    //解析
    $serr = mysqli_fetch_all($ser);
    $jsonser = json_encode($serr);
    print_r($jsonser);

?>