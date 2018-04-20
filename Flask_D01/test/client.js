var request = require("request");

var options = { method: 'POST',
  url: 'http://localhost:5000/register',
  headers: 
   { 'postman-token': '10eb4e5e-730f-bc7c-7891-af04c292b22f',
     'cache-control': 'no-cache',
     'content-type': 'application/x-www-form-urlencoded' },
  form: { username: 'jss', email: 'jss', password: 'jss' } };

request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);
});
