Example of a CRUD application in Symfony2
=========================================

This is a very basic example of a CRUD application in Symfony2 using a MySQL database to store the data.


Installation
------------

You can install the application using composer, if you don't have composer installed you can execute the following command to download it from the official web site:

```sh
curl -s https://getcomposer.org/installer | php
```

And then you can execute the install command:

```sh
php composer.phar install
```

All the required libraries will be stored in the `vendor` folder.


Configure the database
----------------------

This Symfony2 application uses a MySQL database to store post entities of a blog web site.
You need to edit the `app/config/parameters.yml` and configure the credentials for the database access.
After this step you can execute the following doctrine commands to create the database and the table.

```sh
php app/console doctrine:database:create
php app/console doctrine:schema:update --force
```

Run the application
-------------------

You can run the application using a web server, for instance creating a vhost to publish the app folder.
If you are using PHP 5.4+ you can use the internal web server of PHP executing the following command:

```sh
php app/console server:run
```

This command will execute the PHP internal web server on `localhost` with default port `8000`. You can access the application using pointing your browser to the URL `http://localhost:8000`. To access the CRUD features of the application you need to go to `http://localhost:8000/post`.


