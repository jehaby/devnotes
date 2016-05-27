## Help ##

\?, \?

## Homestead ##


Connection:  psql -U homestead -h localhost




## Create user and database ##

    CREATE USER username WITH password 'password';

    CREATE DATABASE dbname;

    GRANT ALL PRIVILEGES ON DATABASE dbname to username;

`\q` to quit

## Connecting to database from bash

 psql -h localhost mediaservice mediaservice    



------------------------------


List databases -- `\l`

list tables -- `\dt`

Show info about table -- `\d+ %tablename%`

Use database `\c %dbname%`

http://guruadmin.ru/page/15-practical-postgresql-database-administration-commands


