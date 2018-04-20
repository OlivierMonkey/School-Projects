import requests
import http.client
from flask import Flask, request, session, g, redirect, url_for, abort, render_template, flash
import crypt
import http.client, urllib.parse

def login_Client():
    conn = http.client.HTTPConnection("localhost:5000")
    payload = "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"username\"\r\n\r\n"+request.form["username"]+"\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"password\"\r\n\r\n" + request.form["password"] + "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--"
    
    headers = {
        'content-type': "multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
        'cache-control': "no-cache",
        'postman-token': "31081938-5101-0007-96b3-dfca51e355a2"
    }

    conn.request("POST", "/login", payload, headers)

    res = conn.getresponse()
    data = res.read()
    data = data.decode("utf-8")
    return data

def register_Client():
    conn = http.client.HTTPConnection("localhost:5000")

    payload = "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"username\"\r\n\r\n"+request.form["username"]+"\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"email\"\r\n\r\n"+request.form["email"]+"\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"password\"\r\n\r\n"+request.form["password"]+"\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--"

    headers = {
        'content-type': "multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
        'cache-control': "no-cache",
        'postman-token': "0d0ba249-322b-29c4-cb22-31f7b3261eb6"
    }

    conn.request("POST", "/register", payload, headers)

    res = conn.getresponse()
    data = res.read()
    data = data.decode("utf-8")
    return data

def show_user_client():
    conn = http.client.HTTPConnection("localhost:5000")

    payload = "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"username\"\r\n\r\noli\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"password\"\r\n\r\noli$5\n\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--"

    headers = {
        'content-type': "multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
        'cache-control': "no-cache",
        'postman-token': "d445a567-91ed-e0f3-e2dc-6f45849fb32d"
    }

    conn.request("GET", "/user/", payload, headers)
    
    res = conn.getresponse()
    data = res.read()
    data = data.decode("utf-8")
    return data


# def caller(url, infos):
#     conn = http.client.HTTPConnection(“localhost:5000”)
#     headers = {
#         ‘content-type’: “application/x-www-form-urlencoded”,
#         ‘cache-control’: “no-cache”,
#         ‘postman-token’: “89f91591-792b-5f58-54c3-9123117a0212"
#         }
#     conn.request(“POST”, url, infos, headers)
#     res = conn.getresponse()
#     data = res.read()
#     print(data.decode(“utf-8"))
#     return data.decode(“utf-8”)


# infos = urllib.parse.urlencode({‘username’: infoForm[‘username’], ‘password’: infoForm[‘password’]})
#         url = “/login”
#         message = json.loads(caller(url, infos))

# def caller(method, url, infos):
#     conn = http.client.HTTPConnection("localhost:5000")
#     headers = {'content-type': "application/x-www-form-urlencoded",
#                'cache-control': "no-cache",
#                'postman-token': "89f91591-792b-5f58-54c3-9123117a0212"}
#     conn.request(method, url, infos, headers)
#     res = conn.getresponse()
#     data = res.read()
#     data = data.decode("utf-8")
#     return data

