```
App takes inputed data (Name, E-mail, Message), validates, puts it into the DB, gets them from DB, if 
DB is not empty, displays data.
```

## To run app use docker. Up the services: 
docker-compose up -d 

## Go to the container
docker exec -it test2_php-apache_1 bash

## Run migration (to create DB)
php artisan migrate

## In the web-browser visit http://localhost. Input data: Name, E-mail, Message
* Name is a string. This field must not be empty.
* E-mail must be like name@example.com, must be unique in DB.
* Message is a text not more than 300 characters.

## Leave container and down the services if you are exit
press ctrl+d
docker-compose down
