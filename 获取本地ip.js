var http = require('http');

http.get({'host': 'myip.ipip.net', 'port': 80, 'path': '/'}, function(resp) {
  resp.on('data', function(ip) {
    console.log("My public IP address is: " + ip);
  });
});


// var http = require('http');

// http.get({'host': 'api.myip.la', 'port': 80, 'path': '/'}, function(resp) {
//   resp.on('data', function(ip) {
//     console.log("My public IP address is: " + ip);
//   });
// });