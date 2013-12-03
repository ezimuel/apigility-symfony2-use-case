Example of RESTful API for an existing Symfony2 project using Apigility
=======================================================================

Installation
------------

You can install the application using composer, if you don't have composer installed you can execute the following command to download it from the official web site:

```bash
curl -s https://getcomposer.org/installer | php
```

And then you can execute the install command:

```bash
php composer.phar install
```

All the required libraries will be stored in the `vendor` folder.


Configure the Symfony2 application
----------------------------------

This example create a RESTful API for the Symfony2 application stored in the `/symfony2app` folder.

You need to edit the `composer.json` file and replace the `autoload` `psr-0` value with the full path of the `symfony2app/src` folder installed on your computer.

Next step is to edit the `module/ApiBlog/src/ApiBlog/V1/Rest/Post/PostResource.php` and change the `$symfonyApp` value with the full path of your `symfony2app` folder (in the constructor of the class). 

Now, you are ready to execute the RESTful API!


Run the RESTful API
-------------------

To run the RESTful API you need to do one of the following step:

- Create a vhost in your web server that points the DocumentRoot to the
  `public/` directory of the project
- Fire up the built-in web server in PHP (5.4.8+) (**note**: do not use this for
  production!)

In the latter case, do the following:

```bash
    cd path/to/install
    php -S 0:8080 -t public/ public/index.php
```

You can then visit the site at http://localhost:8080/ - which will bring up a
welcome page and the ability to visit the dashboard in order to create and
inspect your APIs.


Consume the RESTful API
-----------------------

We exposed the RESTful API with the `/post` URL. In this example, we supported all the following HTTP actions for the management of a `Post` resource.

```
GET    /post        (get the entire list of posts)
GET    /post[/:id]  (get the post specified by id)
POST   /post        (create a new post)
PUT    /post[/:id]  (update a post)
PATCH  /post[/:id]  (partial update a post)
DELETE /post[/:id]  (delete the post specified by id)
```

The values of a posts are stored using this JSON schema:

```json
{
    "id": 1,
    "title": "Example of Title",
    "content": "Example of Content", 
    "publish_date": {
        "date": "2013-12-03 10:43:32", 
        "timezone": "Europe/Berlin", 
        "timezone_type": 3
    }
}
```

All the JSON data are represented using the [HAL](http://tools.ietf.org/html/draft-kelly-json-hal-06) format.


### NOTE ABOUT USING PHP BUILT-IN WEB SERVER

PHP's built-in web server did not start supporting the `PATCH` HTTP method until
5.4.8. Since the admin API makes use of this HTTP method, you must use a version
&gt;= 5.4.8 when using the built-in web server.

