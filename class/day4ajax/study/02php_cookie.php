<?php

    // 后端获取cookie
    print_r($_COOKIE);

    echo "<br/>";
    echo $_COOKIE['a'];
    echo "<br/>";
    echo $_COOKIE['b'];
    echo "<br/>";
    echo $_COOKIE['c'];
    echo "<br/>";
    // echo $_COOKIE['d'];//Notice: Undefined index: d in F:\code\02php_cookie.php on line 13


    // 后端设置cookie
    setcookie('e',500,time()+15)
?>