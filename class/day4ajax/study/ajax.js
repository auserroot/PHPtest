function getSend(url,cb,param){
    var xhr = new XMLHttpRequest();
    xhr.open('get',url+"?"+param);
    xhr.onload = function(){
        cb(xhr.responseText)
    }
    xhr.send()
}


function postSend(url,cb,param){
    var xhr = new XMLHttpRequest()
    xhr.open('POST',url);
    xhr.onload = function(){
        cb(xhr.responseText)
    }
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.send(param)
}