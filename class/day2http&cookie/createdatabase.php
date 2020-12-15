<?php
    //引入base文件
    include "../php/base.php";
    //链接数据库
    $link = mysql_connect('localhost','root','root');
    $sqlcr = " CREATE DATABASE user ";
    mysql_query($sqlcr,$link);
    mysql_select_db(user, $link);
    $sqltb = " CREATE TABLE info (
        id int NOT NULL AUTO_INCREMENT, 
        PRIMARY KEY(id),
        username varchar(15) NOT NULL,
        password varchar(15) NOT NULL
        )";
    mysql_query($sqltb,$link);
?>