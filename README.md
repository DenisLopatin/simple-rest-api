## Simple REST API in PHP.

A simple REST API is written in PHP.

---

### Dependencies

This API required PHP version `8.1`, Apache `2.4` and
MySQL version `5.6`.

---

### Getting start

You should create a database and a configuration file simply 
by filling in the data in `.env`. Your `.env` file should look
like this:

    DB_DRIVER=""
    DB_HOST=""
    DB_NAME=""
    DB_USER="root"
    DB_PASSWORD=""
    DB_PORT=""
    DB_CHARSET=""

    CACHE_TIME=""
    CACHE_FOLDER="'
    
    LOG_FOLDER=""

Then you should use `composer install`. After that, start your
server and follow the path in the browser `[domain]/api/v1/users`.

Recommend use OpenServer, WampServer or something like this.

Use Postman for your requests.

