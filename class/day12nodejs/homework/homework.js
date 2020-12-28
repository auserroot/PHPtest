// 使用 fs 模块完成一个向文件里面追加内容的操作
const fs = require('fs');//导入fs模块


//读取文件
// fs.readFile()//用于异步读取文件
    // 语法：fs.readFile('要读取的文件路径'[,文件编码格式],成功回调函数)

    // fs.readFile('./text.txt','utf-8',function(err,data){
    //     // err读取失败时的信息
    //     //data读取成功时的信息
    //     if(err){
    //         console.log(err);
    //     }
    //     console.log(data)
    // })

    // fs.readFileSync() //用于读取同步代码
            // 语法：fs.readFileSync('要读取的文件'[,文件格式])

            // var data = fs.readFileSync('./text.txt','utf-8');
            // console.log(data);


    // fs.writeFile()//异步写文件
            // 语法：fs.writeFile('要写入的文件','写入内容',成功回调)

            // fs.writeFile('./text.txt','hello world',function(){
            //     console.log('success')
            // })


    // fs.writeFileSync()//用于同步写文件
            // 语法： fs.writeFileSync('文件名','写入内容')

            fs.writeFileSync('./text.txt','hahahah')
            console.log('success')