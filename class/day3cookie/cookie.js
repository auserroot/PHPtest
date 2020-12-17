function setCookie(key,value,putTime){
    // key 表示 cookie的键
    // value 表示 cookie的值
    // putTime 表示多少天过期，不传默认回话时效

    //判断是否传putTime值
    if (putTime) {
        //获取当前时间
        var time = new Date();
        //设置（东8区）时间戳(putTime天后过期)
        time.setTime(time.getTime() - 8 * 60 * 60 * 1000 + putTime * 24 * 1000 * 60 * 60);
        document.cookie = key + '=' + value + ';expires=' + time;
    } else {
        document.cookie = key + '=' + value;
    }
}

function removeCookie(key){
    // key 表示 cookie的键
    //由于要删除可以将键值赋值为任意值（这里赋值为1）
    //删除cookie 只需将过期时间调整到当前时间之间即可（这里time=-1）
    setCookie(key,1,-1);
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