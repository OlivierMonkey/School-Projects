require 'uri'
require 'net/http'

url = URI("http://localhost:5000/register")

http = Net::HTTP.new(url.host, url.port)

request = Net::HTTP::Post.new(url)
request["content-type"] = 'application/x-www-form-urlencoded'
request["cache-control"] = 'no-cache'
request["postman-token"] = 'ca45b508-1c1b-a03a-b525-e450f6cd6241'
request.body = "username=jss&email=jss&password=jss"

response = http.request(request)
puts response.read_body
