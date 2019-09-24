## Help ##

\?, \?

## Homestead ##


Connection:  psql -U homestead -h localhost -p port




## Create user and database ##

    CREATE USER username WITH password 'password';

    CREATE DATABASE dbname;

    GRANT ALL PRIVILEGES ON DATABASE dbname to username;

`\q` to quit

## Connecting to database from bash

 psql -h localhost -U username mediaservice mediaservice    



------------------------------


List databases -- `\l`

list tables -- `\dt`

Show info about table -- `\d+ %tablename%`

show all enumbs -- `\dT+`

Use database `\c %dbname%`

http://guruadmin.ru/page/15-practical-postgresql-database-administration-commands


## dump and restore
https://www.postgresql.org/docs/8.1/static/backup.html



## Pretty output

    \x on

https://www.postgresql.org/docs/9.5/static/app-psql.html
https://stackoverflow.com/a/16108898


## Triggers
http://www.postgresqltutorial.com/introduction-postgresql-trigger/

Triggers -- function invoked automatically when event occurs (ON INSERT/UPDATE/DELETE/TRUNCATE)

There're 2 levels:
1. Row level triggers -- invokes each time when row changes;
2. Statement level trigger -- invokes one time

## PgAdmin

docker run \
--network=host \
-v "/private/var/lib/pgadmin:/var/lib/pgadmin" \
-e "PGADMIN_DEFAULT_EMAIL=u@u" \
-e "PGADMIN_DEFAULT_PASSWORD=fifa141090" \
-d dpage/pgadmin4


## set json field 
UPDATE some_table SET field = field || '{"never_owned_by_reason": true}'

