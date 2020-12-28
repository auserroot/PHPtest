// 学习内置模块http

/* 
    node的内置模块有一个http模块
        + 这个模块是专门用来创建服务的
        + 就是可以把一个电脑上的命名行窗口，当成一个服务器来使用
        + 只能支持http协议
        + 一个内置模块，直接导入就可以使用了
    http模块里面创建服务的方法
        1 http.createServer(function(){})
            ==> 返回值：就是一个服务
            ==> 当这个服务监听一个端口的时候，就变成了一个服务器
        2 使用这个服务去监听一个端口号
            ==> 你创建的服务.listen(你要监听的端口号[,监听成功之后的回调函数])
        + 上述代码写好以后，当你在终端运行这个文件的时候
            ==> 你的终端那就是一个服务器了
            ==> 就可以打开浏览器去访问localhost:你自己定义的端口号
        
*/

// 0 导入http模块
const http = require('http');
const fs = require('fs');
// 1 创建一个服务
const server = http.createServer(function(req,res){
    // 这个函数是前端的每一个请求都会执行的函数
    // 只有我监听的端口号有请求过来的时候，才会执行这个函数
    // 这个函数接收两个形参
    // req(request) => 表示每次请求的信息
    // req.url 表示本次请求的地址    
    // res(response) => 表示每次请求的响应
    // res.end() 表示本次返回的响应

    console.log("我执行了，表示有请求进来了")
    console.log(req.url)

    // 通过不同的url来做不同的是事情了
    if(req.url == "/index.html"){
        // 表示前端想访问index.html文件
        // 我就读取到这个文件给他
        fs.readFile('./public/index.html','utf8',function(err,data){
            if(err){return console.log(err)}

            res.end(data);
        })
    }
})

// 2 监听一个端口
// 端口号 0 - 65535
// 0-1023不推荐使用
server.listen(8080,function(){
    console.log('监听8080端口成功!')
})

