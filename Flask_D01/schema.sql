drop table if exists users;
create table users (
	id     	     integer primary key autoincrement,
	username     text	 NOT NULL,
	email	     text	 NOT NULL,
	password     text	 NOT NULL
	);	     		  
