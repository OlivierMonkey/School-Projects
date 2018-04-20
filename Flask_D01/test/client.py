import requests

url = "http://localhost:5000/register"

payload = "username=pol&email=pol&password=pol"
headers = {
    'content-type': "application/x-www-form-urlencoded",
    'cache-control': "no-cache",
    'postman-token': "3b9bfc85-7054-b74c-af1f-699babc9eb71"
    }

response = requests.request("POST", url, data=payload, headers=headers)

print(response.text)
