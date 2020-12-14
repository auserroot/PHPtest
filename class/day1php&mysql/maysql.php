<?php
    /*
        数据库
            就是一个存储数据的'大仓库'
            其中包含多个'小仓库'
            每个小仓库中有多个'表格'
            每个表格中有很多“字段” ，就是'表头'
            每个表中有很多行，就是‘表体’
    */
    /*
        php语言操作数据库
            php操作数据库的两种方法 
                mysql语法 --> php5
                mysqli语法 --> php7
            操作数据库固定步骤
                链接数据库
                执行操作
                解析结果
                断开链接
            
            链接数据库
                语法： mysqli_connect("ip地址","数据库用户名","数据库密码","数据库名");
                    ip地址：
                        数据库电脑ip
                        使用集成工具安装在本地 ip为：localhost或127.0.0.1
                    用户名、密码：默认root
                        可修改
                    数据库名：
                        要使用的数据库
            操作数据库
                mysqli_query("数据库链接信息","要执行的sql语句")
                    增删改查都是用这个方法
                        但其中sql语句不同
                            "SELECT * FROM `表名` " --> 查询某表中所有信息
                    返回值就是查询结果
            解析结果
                mysqli_fetch_assoc(要解析数据库的查询结果)
                    不是所有操作都需要解析结果（增删改就不需要）
                    返回值 解析好的一个结果 （一个关联型数组）
                        该方法一次只能解析一条数据
                mysqli_fetch_all(要解析的数据库查询结果,MYSQLI_ASSOC)
                    将所有数据都解析
                        返回一个二维数组
            断开链接
                mysqli_close(链接信息)
    */
    //链接
        $link = mysqli_connect('127.0.0.1','root','root','time');
    //操作
    $re = mysqli_query($link,"SELECT * FROM `hour`");
    //解析
    // print_r(mysqli_fetch_assoc($re));//这个方法只能解析一条数据
    $arr = mysqli_fetch_all($re,MYSQLI_ASSOC);
    $jsonArr = json_encode($arr);
    echo $jsonArr;
    
    //断开
    mysql_close($link);

?>