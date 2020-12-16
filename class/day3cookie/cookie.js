function setCookie(key,value,time){
    // key 表示 cookie的键
    // value 表示 cookie的值
    // time 表示多少天过期，不传默认回话时效
}

function removeCookie(key){
    // key 表示 cookie的键
}

function getCookie(key){
    // key 表示 cookie的键
    var str = document.cookie;
    // 把str变成一个数组，数组的每个元素都是一个“key=value”
    var arr = str.split("; ");
    // 我想获取key对应的值
    for(var i=0;i<arr.length;i++){
        // 遍历到的每一个元素arr[i] = "key=value"
        // 把这个"key=value"变成[key,value]
        var temp = arr[i].split('=');
        if(temp[0]==key){
            return temp[1];
        }
    }

}