import os
import sqlite3
from flask import Flask, request, session, g, redirect, url_for, abort, render_template, flash
import crypt
import controller_client

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/login', methods=['GET', 'POST'])
def login():
    error = None
    if request.method == 'POST':
        return controller_client.login_Client()
    else:
        return render_template('login.html')
    
@app.route('/register', methods=['GET', 'POST'])
def register():
    if request.method == 'POST':
        return controller_client.register_Client()
    return render_template('register.html')

@app.route('/logout')
def logout():
    session.pop('logged_in', None)
    flash('You were logged out')
    return redirect(url_for('index'))


@app.route('/user/', defaults={'id': None}, methods=['GET'])
@app.route('/user/<int:id>/', methods=['GET', 'PUT', 'DELETE'])
def crud_user(id):
    if request.method == 'GET':
        if id == None:
            return controller_client.show_user_client()
        else:
            return controller_client.show_users_client(id)
    elif request.method == 'PUT':
        return controller_client.update_user_client(id)
    elif request.method == 'DELETE':
        return controller_client.delete_user_client(id)
    else:
        render_template('index.html')
