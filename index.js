/**
   Note, this code is NOT my own, it was taken from a Heroku example so the integration with the app could be easily done.
**/

var express = require('express');
var app = express();

var port = 5000;
var index = 'views/index.html';

app.set('port',(process.env.PORT || 5000));

app.use(express.static(__dirname + '/public'));

app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

app.get('/', function(request,response) {
    response.render(index);
});

app.listen(app.get('port'), function() {
    console.log('Node app is running on port ', app.get('port'));
});
