var mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/test', {
    useMongoClient: true
});

var users = require('./users');

var db = mongoose.connection;
db.on('error', console.error.bind(console, 'connection error:'));
db.once('open', function(){

});

var User = mongoose.model('user');

// var oli = new User({name: 'oli', email: 'oli@gmail.com', password: 'oli'});
// console.log(oli.email);