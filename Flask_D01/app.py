import os
import sqlite3
from flask import Flask, request, session, g, redirect, url_for, abort, render_template, flash
import crypt
import controller

app = Flask(__name__)

# SALT_PASSWORD = 'saltpwd'

app.config.from_object(__name__)

app.config.update (dict(
    DATABASE = os.path.join(app.root_path, 'flaskr.db'),
    SECRET_KEY = 'development key',
    USERNAME = 'admin',
    PASSWORD = 'default'
    ))
app.config.from_envvar('FLASKR_SETTINGS', silent=True)

def connect_db():
    rv = sqlite3.connect(app.config['DATABASE'])
    rv.row_factory = sqlite3.Row
    return rv

def get_db():
    if not hasattr(g, 'sqlite_db'):
        g.sqlite_db = connect_db()
    return g.sqlite_db

def query_db(query, args=(), one=False):
    cur = get_db().execute(query, args)
    rv = cur.fetchall()
    cur.close()
    return (rv[0] if rv else None) if one else rv

def init_db():
    db = get_db()
    with app.open_resource('schema.sql', mode='r') as f:
        db.cursor().executescript(f.read())
    db.commit()

@app.cli.command('initdb')
def initdb_command():
    init_db()
    print('initialized the database.')

@app.route('/')
def index():
    return render_template('index.html')
    
@app.route('/show')
def show_users():
    db = get_db()
    cur = db.execute('select * from users')
    users = cur.fetchall()
    return render_template('show_users.html', users = users)

@app.route('/add', methods=['GET','POST'])
def add_user():
    if request.method == 'POST':
        if not session.get('logged_in'):
            abort(401)
        db = get_db()
        db.execute('insert into users (username, email, password) values (?, ?, ?)',
               [request.form['username'], request.form['email'], crypt.crypt(request.form['password'], request.form['username'])])
        db.commit()
        flash('New user was successfully posted')
        return redirect(url_for('index'))
    return render_template('add_user.html')

@app.route('/user/', defaults={'id': None}, methods=['GET'])
@app.route('/user/<int:id>/', methods=['GET', 'PUT', 'DELETE'])
def crud_user(id):
    db = get_db()
    return controller.user_CTRL(id, request, db)  
        
@app.route('/register', methods=['GET', 'POST'])
def register():
    db = get_db()
    if request.method == 'POST':
        var = controller.register_CTRL(request, db)
        if var == True:
            flash('New user was successfully registered')
            return redirect(url_for('index'))
        else:
            flash('Register Failed')
    return render_template('register.html')

@app.route('/login', methods=['GET', 'POST'])
def login():
    error = None
    if request.method == 'POST':
        db = get_db()
        userlog = controller.login_CTRL(request, db)
        if userlog == True:
            session['logged_in'] = True
            flash('You were logged in')
            return redirect(url_for('index'))
        else:
            return render_template('login.html')
    else:
        return render_template('login.html')
    
@app.route('/logout')
def logout():
    session.pop('logged_in', None)
    flash('You were logged out')
    return redirect(url_for('index'))



