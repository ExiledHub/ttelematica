/**
   Note, this code is NOT my own, it was taken from a Heroku example so the integration with the app could be easily done.
**/

var express = require('express');
var app = express();
var path = require("path");

var port = 5000;
var index = 'views/index.html';

console.log(__dirname + index);

app.get('/', function(request, response) {
    response.send('Hello World!')
});


//app.get('/views', function(req,res) {
//    res.render(path.join(__dirname + index));
//});

console.log(path.join(__dirname + index););

app.listen(app.get('port'), function() {
    console.log('Node app is running on port ', app.get('port'));
});

console.log('port: ' + app.get('port'));
