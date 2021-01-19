# wp-test-project

### How to use:
1. create directory `mariadb-init`
2. transfer `my-db.sql` file in have created directory 
3. rename **.env.backup** to **.env**
4. run the command `docker-compose up -d`
5. run `make composer install`
6. visit `http://wp.docker.localhost:8000/wp-login.php`
7. log in user `admin` password `12345`


### In project also used:
- composer (for autoload classes and packages)
- phpcs (linter to support a required codestyle PSR12 without CamelCase)

Also you can see .Makefile that know more about commands.

___

*my github https://github.com/renakdup* 