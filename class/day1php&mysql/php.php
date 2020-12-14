<?php 
    /*
        php是一个后端语言
            运行在apache服务器上
            将php文件保存在www文件夹内
            在浏览器以localhost形式访问
        php代码写在 .php文件内（浏览器不能直接解析php文件）

        每个php文件都要写PHP标签（<?php ?>)

        php文件不允许中文命名（会报错）
    */
    //php事例
    // echo "hello world"

    /* 
        注释
            // 单行注释
            / ** / 多行注释
            # 单行注释（老版本用的多
    */

    /*
        输出语句(输出到页面)
            php是个后端语言，数据输出和前端不同
                后端语法是谁向后台请求数据，后台就将数据反馈给谁
        php输出语法
            echo 输出内容
            print_r(输出内容)
            var_dump(输出内容)
        区别
            echo
                只能输出基本数据类型，复杂数据类型会报错
                布尔值 true输出1 false输出空白字符串
            print_r
                可以输出所有数据类型
                布尔值 true输出1 false输出空白字符串
            var_dump
                可以输出所有数据类型
                布尔值 true输出true false输出false
                并将数据类型输出
    */
    //echo
    // echo 'hello world';
    // echo '<br>';

    //print_r
    // print_r('hello word');
    // print_r('<br>');

    //var_dump
    // var_dump('hello world');

    // 详细区别
    // $a = 'hello';
    // $b = '100';
    // $c = 'flase';
    // $d = 'true';
    // $arr = array(1,2,3,true);

    // // 1 echo
    // echo $a;echo ' ';
    // echo $b;echo ' ';
    // echo $c;echo ' ';
    // echo $d;echo ' ';
    // echo $arr;echo ' ';

    // //2 print_r
    // print_r($a) ;echo ' ';
    // print_r($b) ;echo ' ';
    // print_r($c) ;echo ' ';
    // print_r($d) ;echo ' ';
    // print_r($arr) ;echo ' ';

    //3 var_dump
    // var_dump($a) ;echo ' ';
    // var_dump($b) ;echo ' ';
    // var_dump($c) ;echo ' ';
    // var_dump($d) ;echo ' ';
    // var_dump($arr) ;echo ' ';

    /*
        变量
            在js中定义变量用关键字var
            php中定义变量没有关键字，
                以$开头就表示一个变量
                如：$num =100
                变量名： $num 
                $ 不是关键字，是变量的一部分
                使用时直接用$num就行
    */
    //定义变量
    // $num = 100;
    // // 使用变量
    // echo $num;

    /*
        字符串
            js中定义字符串用'' 、"" 两者没有任何区别
            php中也是这两种方法，但有区别
                '' 单引号 是定义普通字符的
                "" 双引号 是一个特殊字符串，可以在字符串中直接解析变量
            字符串拼接
                js里用 + 做字符串拼接
                php中用 . 做字符串拼接
                    语法 字符串1.字符串2
    */

    //单引号
    // $age = 10;
    // $s = 'I am $age years old';
    // echo $s;

    // //双引号
    // $ss = "I am $age years old";
    // echo $ss;

    //拼接
    // echo "hello"." "."world";

    /*
        中文问题
            为何会乱码？
                php将代码直接输出到页面，并没有指定代码解析字符集格式
            如何解决?
                给浏览器指定编译字符集格式
                语法
                    header(字符集格式)
    */
    //将php代码用utf-8字符集编译（防止中文乱码）
    // header('content-type:text/html;charset=utf-8;');
    // echo '你好世界！'

    /*
        分支语句
            和js一样 php有条件分支语句和循环分支语句
                条件分支
                    if(){}
                    if(){}else{}
                    switch(){}
                循环分支
                    while(){}
                    do{}while()
                    for(){}
    */
    // //分支语句
    //     $age = 17;

    //     if($age>=18){
    //         echo '成年';
    //     }else{
    //         echo '未成年';
    //     }
    //     echo "<br>";

    //     //循环
    //     $n = 0;
    //     while($n<10){
    //         echo $n;
    //         echo " ";
    //         $n++;
    //     }
    //     echo "<br>";
    //     for($i=10;$i<20;$i++){
    //         echo $i ;
    //         echo " ";
    //     }

    /*
        php中的json格式转换
            js中
                json字符串转对象：JSON.parse(json字符串)
                对象转json字符串： JSON.stringify(对象)
            php中
                php数据格式转json数据格式：json_encode(要转换的php数据格式)
                json字符串转php数据格式：json.decode(json字符串)

    */

    //php格式数组
    // $arr = array("name"=>"zhangsan","age"=>18);
    // //将$arr转换成json字符串
    // $jsonArr = json_encode($arr);
    // echo $jsonArr;
    // echo" <br> ";
    // //将json转php数据格式
    // $newArr = json_decode($jsonArr);
    // print_r($newArr);

    /*
        php数组
            js中
                数组 [1,3,2,...]
                对象 {name:'jack',age:'18',...}
            php中
                索引型数组 等价于js中数组
                关联性数组 等价于js中对象
            语法
                索引型数组 $arr  = array(数据1，数据2，...)
                    按照索引下标进行排列
                        获取数据
                            数组名[索引]
                关联型数组 $arr = array(key1=>value1,key2=>value2,...)
                    注意
                        key、value 都要用引号包裹(''/"")
                        如果不用引号包裹会被当成变量编译(会报错)
                        中间连接符是 => 
                        其中数值和布尔型不用引号包裹
                            获取某一项
                                数组名['需要获取的属性名']
            拓展
                in_array(key,$arr) 查询数组中是否存在指定值
                count($arr) 计算数组长度
                array_key_exists(key,$arr) 搜索数组中是否存在指定的键
                unset($arr[key]) 删除数组中指定元素
    */

    //索引型数组
    $arr = array(1,2,true,'hello');
    // var_dump($arr);
    // echo " ";
    // var_dump( $arr[2]);

    //关联型数组
    $arr1 = array('name'=>'jack','age'=>12);
    // print_r($arr);
    // echo $arr['name'];

    //数组方法
        // echo in_array('jack',$arr);//false 空白字符串
        // echo in_array('jack',$arr1);//true 1
        // echo count($arr);//4
        // echo count($arr1);//2
        // echo array_key_exists('name',$arr1);//true 1
        // echo array_key_exists('old',$arr1);//false 空白字符串
        // unset($arr1['age']);
        // print_r($arr1);

    // //循环数组
    // foreach($arr as $value){
    //     //$arr 是要遍历的数组
    //     //$value 是遍历到的值
    //     echo $value;
    //     echo " ";
    // }
    // foreach($arr1 as $key=>$value){
    //     //$arr 是要遍历的数组
    //     //$key 是循环到的键
    //     //$value 是遍历到的键值
    //     echo $key."值为".$value." ";
    // }

    /*
        导入语法
            就是把另一个php文件拿到我这里来执行

        例子:
            提前准备一个base.php文件，在里面写上header()那一段代码
            在当前文件里面导入base.php文件
            就相当于在当前文件中执行base.php文件中的代码
        
        语法:
           在这里导入base.php文件
           include "你要导入的文件路径"
        
        目录
           直接写文件名，表示同级目录，但是不推荐这么写
           ./ 表示同级目录,推荐这么写
           ../ 表示上一级目录
    */

    //文件导入
    // include "../php/base.php"
?>
