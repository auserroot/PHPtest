// 导入某个js模块里面的方法:用export导出
// import {getColor as color,rand} from "./public.js";

// 导入某个js模块里面的方法:用export default导出
// import dd from "./public.js";

// 直接导入一个js模块:运行一次该js模块，但是不能得到里面的任何方法
// import "./public.js"

// as可以给导入的方法重命名
export function init(){
    alert(rand(10,23));
    console.log(dd)
    document.body.style.background = color()
}
