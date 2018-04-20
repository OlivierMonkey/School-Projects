import model
from flask import Flask, request, session, g, redirect, url_for, abort, render_template, flash, jsonify
import crypt
import re

def register_CTRL(request, db):
    # if request.form['username'] != "" and re.match(r"^[a-zA-Z0-9_.-]{3,10}$", request.form['username']) and request.form['password'] != "" and re.match(r"^[A-Za-z0-9@#$%^&+=]{8,20}", request.form['password']) and request.form['email']!= "" and re.match(r"[^@]+@[^@]+\.[^@]+", request.form['email']):
    if request.form['username'] != "" and request.form['password'] != "" and request.form['email']!= "":
        if not re.match(r"^[a-zA-Z0-9_.-]{3,10}$", request.form['username']):
            print(re.match(r"^[a-zA-Z0-9_.-]{3,10}$", request.form['username']))
            flash("Invalid username")
            return False
        elif not re.match(r"^[A-Za-z0-9@#$%^&+=]{3,20}", request.form['password']):
            flash("Invalid password")
            return False
        elif not re.match(r"[^@]+@[^@]+\.[^@]+", request.form['email']):
            flash("Invalid email")
            return False
        else:
            if model.insert_db(request, db) == True:
                return True
    else:
        flash("Complete fields")
        return False

def login_CTRL(request, db):
    if request.form['username'] != "" and request.form['password']!= "":
        userlog = model.select_db(request, db)
        if userlog is None:
            flash('Invalid user / password')
            return False
        else:
            return True
        # if request.form['username'] != userlog['username']:
        #         flash('Invalid username')
                # return False
    #          elif crypt.crypt(request.form['password'], request.form['username']) != userlog['password']:     
    #             flash('Invalid password')
    #             return False
    #          else:
    #             return True
    # return False
    else:
        return False
                
def user_CTRL(id, request, db):
    if id == None:
        res = model.select_all(db)
        #return res
        return jsonify([dict(article) for article in res])    
    if request.method == 'GET':        
        res = model.select_one(id, db)        
        return jsonify([dict(article) for article in res])    
    if request.method == 'DELETE':        
        model.delete_db(id, db)        
        data = {'user with id:'+str(id) :'deleted'}        
        return jsonify(data)    
    if request.method == 'PUT':        
        res = model.update_db(id, request, db)
        data = {'user with id:'+str(id) :'updated'} 
        return jsonify([dict(article) for article in res])                             
