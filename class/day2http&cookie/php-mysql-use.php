<?php
    // 处理中文乱码问题
    include "../php/base.php";

    //链接
    $link = mysqli_connect('localhost','roo','root','time');

    //执行操作
    $sql = "SELECT * FROM `hour`";
    $re = mysql_query($link,$sql);

    //解析
    $res = mysql_fetch_all($re,MYSQLI_ASSOC);
    $result = json_encode($res);
    print_r($result);

    //断开连接
    mysql_close($link)

    // Warning: mysqli_fetch_all() expects parameter 1 to be mysqli_result, boolean given in F:\code\01php_mysql.php on line 14
    // 表示sql语句写错了

    /*
        sql语句
            专门用来操作数据库的语句
            增删改操作不需要做解析处理（其返回值为布尔型 true 表示成功 false 表示失败）
            查询语句
                需要解析
                查询不到返回false
            规范
                sql语句关键字要大写
                表名、字段尽可能用``包裹
            语法规则
                写文本内容是要用引号包裹 表示一个字符串

        插入语句
            关键字：    INSERT
            语法：
                1  INSERT INTO `表名` VALUES(数据1，数据2，...)
                    按数据库中字段顺序插入
                    id可以直接写null，会自动增长
                2  INSERT INTO `表名` (字段1，字段2，...) VALUES (数据1，数据2，...)
                    按字段插入
                    可以添加部分字段
            $result为false时
                表示sql有语法错误
                语法1 必须按数据库中字段数添加
                语法2 数据库中字段要存在

        删除语句
            关键字：    DELETE
            语法
                DELETE FROM `表名` WHERE 条件
                指定什么条件下执行删除语句

        修改语句
            关键字：    UPDATE
            语法：
                UPDATE `表名` SET `字段` = 新值 WHERE 条件
                可同时修改多个字段后面用逗号分隔

        查询语句
            关键字：    SELECT
            语法：
                1   SELECT * FROM `表名`
                    查询表中所有数据
                2   SELECT * FROM `表名` WHERE 条件
                    根据条件查询
                3   SELECT * FROM `表名` WHERE 条件1 AND 条件2
                    两个条件都满足后查询
                4   SELECT * FROM `表名` WHERE 条件1 OR 条件2
                    两个条件都满足一个查询
                5   SELECT * FROM `表名` WHERE 字段 LINK '%关键字%'
                    根据关键字查询

    */
?>