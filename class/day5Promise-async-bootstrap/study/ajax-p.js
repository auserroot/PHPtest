function getSend(url){
    // 1 原始版
    // var xhr = new XMLHttpRequest();
    // xhr.open('get',url);
    // xhr.onload = function(){
    //     cb(xhr.responseText)
    // }
    // xhr.send()

    // 2 Promise版本
    var p1 = new Promise(function(resolve,reject){
        // 做一步的事情
        var xhr = new XMLHttpRequest();
        xhr.open('get',url);
        xhr.onreadystatechange = function(){
            if(xhr.status==200&&xhr.readyState==4){
                resolve(xhr.responseText)
            }
            if(xhr.status==404){
                reject()
            }
        }
        xhr.send()
    })
    return p1;
}


function postSend(url,param){
    // 1 原始版本
    // var xhr = new XMLHttpRequest()
    // xhr.open('POST',url);
    // xhr.onload = function(){
    //     cb(xhr.responseText)
    // }
    // xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    // xhr.send(param)


    // 2 Promise版本
    var p1 = new Promise(function(resolve,reject){
        var xhr = new XMLHttpRequest()
        xhr.open('POST',url);
        xhr.onreadystatechange = function(){
            if(xhr.status==200&&xhr.readyState==4){
                resolve(xhr.responseText)
            }
            if(xhr.status==404){
                reject()
            }
        }
        xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhr.send(param)
    })
    return p1;
}




