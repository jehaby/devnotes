## Help ##

\?, \?

## Homestead ##


Connection:  psql -U homestead -h localhost


## Start new db in docker 
docker run --rm --name pg-docker -d -p 5432:5432  postgres


## Create user ##

    CREATE USER username WITH password 'password';

    CREATE DATABASE dbname;

    GRANT ALL PRIVILEGES ON DATABASE dbname to username;

`\q` to quit



------------------------------


List databases -- `\l`

list tables -- `\dt`

Show info about table -- `\d+ %tablename%`

Use database `\c %dbname%`

http://guruadmin.ru/page/15-practical-postgresql-database-administration-commands


