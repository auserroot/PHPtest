// 这个文件就是一个我自己创建的自定义模块

// 你可以再这里写一些自己定义的方法
function fn1(){
    console.log('我是a模块里面的fn1方法')
}
function fn2(){
    console.log('我是a模块里面的fn2方法')
}

// 要把模块里面的方法导出
// 别的文件再导入a.js文件的时候才能得到a模块里面的方法
/* 
    每一个js文件都是一个独立的模块
        + 每一个js文件天生自带一个变量叫做module，是一个对象
        + 每一个module里面有个成员叫做exports，是一个对象
        + 这个module.exports就是这个js文件向外导出的内容
        + 我么你想要的向外暴露的内容，添加到这个对象上就可以了
*/
module.exports.fn1 = fn1;
module.exports.fn2 = fn2;
/* 
相当于这个文件向外导出一个对象
{
    fn1: function fn1(){
        onsole.log('我是a模块里面的fn1方法')
    },
    fn2: function fn2(){
        console.log('我是a模块里面的fn2方法')
    }
}
谁使用require导入a.js文件的时候，谁就得到了这个对象

nodejs的模块化规范commonjs: require导入，module.exports导出
es6的模块化规则:import导入，export导出
*/

