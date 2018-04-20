from flask import Flask, request, session, g, redirect, url_for, abort, render_template, flash
import crypt

def get_db():
    if not hasattr(g, 'sqlite_db'):
        g.sqlite_db = connect_db()
    return g.sqlite_db

def query_db(query, args=(), one=False):
    cur = get_db().execute(query, args)
    rv = cur.fetchall()
    cur.close()
    return (rv[0] if rv else None) if one else rv

def insert_db(request, db):
    res = db.execute('insert into users (username, email, password) values (?, ?, ?)',
                     [request.form['username'], request.form['email'], crypt.crypt(request.form['password'], request.form['username'])])
    if res.rowcount == 0:
        return False
    db.commit()
    return True

def select_db(request, db):
    print(request.form['username'])
    print(request.form['password'])
    res = query_db('select * from users where username = ? and password = ?', [request.form['username'], crypt.crypt(request.form['password'], request.form['username'])], one=True)
    return res

def select_all(db):
    res = query_db('select * from users')
    return res

def select_one(id, db):
    res = query_db('select * from users where id =' +str(id))
    return res

def update_db(id, request, db):
    cmd= "update users set username = '"+request.form['username']+"', email = '"+request.form['email']+"', password = '"+crypt.crypt(request.form['password'], request.form['username'])+"' where id="+str(id)
    res = query_db(cmd)
    db.commit()
    return res

def delete_db(id, db):
    # cmd = "delete from users where id like %d;" % id
    # print(cmd)
    # res = query_db(bytes(cmd, "UTF-8"))
    res = query_db("delete from users where id="+str(id))
    db.commit()
    return res

def close_db(error):
    if hasattr(g, 'sqlite_db'):
        g.sqlite_db.close()


