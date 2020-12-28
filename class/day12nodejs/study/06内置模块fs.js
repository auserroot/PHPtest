// 学习node的内置模块fs
const fs = require('fs');//导入这个fs模块
/* 
    内置模块就是安装node的时候自动带有的
        + 不需要下载和书写，只需要导入进来
        + 导入使用require()方法
    这个模块叫做fs模块
        + 我们只要导入这个fs模块就可以了
    fs这模块里面的几个方法
        1 fs.readFile() => 专门用来“异步”读取文件的
            ==> 语法:fs.readFile('你要读取的文件'[,读取文件格式],读取成功的回调函数)
            ==> 第二个参数是字符集格式
        2 fs.readFileSync() => 专门用来“同步”读取文件的
            ==> 语法:fs.readFileSync('你要读取的文件'[,读取文件格式])
            ==> 返回值:就是读取成功的时候读取出来的内容
            ==> 如果读取失败，直接打断程序，报错
        3 fs.writeFile() => 专门用来“异步”写文件的
            ==> 语法:fs.writeFile('你要写入哪一个文件',你要写入的内容,写入成功的回调函数)
            ==> 覆盖是写入
            ==> 你要写入哪一个文件,如果文件不存在则新建
        4 fs.writeFileSync()  => 专门用来“同步”写文件的
            ==> 语法:fs.writeFileSync('你要写入哪一个文件',你要写入的内容)
*/

// 1 fs.readFile()
// fs.readFile('./06.txt','utf8',function(err,data){
//     // 读取成功的回调函数
//     // 接收两个形参
//     // err => 读取失败的时候的失败信息
//     // data => 读取成功的时候读取的内容
//     //      => 读取的内容默认是buffer格式的字符串（我们看不懂，计算机能看懂）
//     //      => 如果想读取一个我们能看懂的文件，那在readFile的第二个参数做文章
//     //      => 我们只要在第二个参数传递一个utf8就可以了，那么读取出来的就是我们能看懂的了
//     // console.log("===err===")
//     // console.log(err)
//     // console.log("===data===")
//     // console.log(data);
//     if(err){
//         return console.log(err)
//     }
//     console.log(data)
// })


// // 2 fs.readFileSync()
// var data = fs.readFileSync('./06.txt','utf8');
// console.log(data)

// 3 fs.writeFile()
// fs.writeFile('./06.txt',"hello world",function(){
//     // 写入成功的回调函数
//     console.log('文件写入成功')
// })


// // 4 fs.writeFileSync()
// fs.writeFileSync('./06.txt','11111');
// console.log('写入完成')

// 作业1:我要向一个文件里面追加一些内容
// 作业2:我要复制一个文件
