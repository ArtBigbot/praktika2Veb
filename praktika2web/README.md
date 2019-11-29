# slender
A slender starter structure for Slim 3

## Installation

`composer create-project codecourse/slender projectname`

## What's this all about then?

The simplest boilerplate for getting started on a new Slim adventure. No clutter, ready to transform into your next big idea.

Also used for [Codecourse](https://www.codecourse.com) courses, just to save a little time.

## Contributing

Feel free to submit any minor enhancements, but the goal here is to keep this as simple (yet as practical) as possible, so no huge additions. Thanks!



STEPS TO MAKE PROJET WORK
1. Write "composer install" in terminal
2. Launch XAMPP and turn on Apache and MySQL
3. Go to phpmyadmin localhost http://localhost/phpmyadmin/. If it doesn't work specify your after localhost. Example: http://localhost:8090/phpmyadmin/
4. Create a local DB with a name "praktika2ws"
5. write "vendor/bin/phinx migrate" in your terminal to launch migrations
6. Go to postman. Select Post method, place the link: "http://localhost/praktika2Veb/praktika2web/api/create_user.php" for creating user in database. Choose body, raw and JSON,
7. Place the data for example:
{
    "firstname" : "Artjom",
    "lastname" : "Vorobei",
    "email" : "art@mail.com",
    "password" : "9315"
}
8. Make a new a tab and with a link: "http://localhost/praktika2Veb/praktika2web/api/login.php" for login, Choose body, raw and JSON.

9. And place the data, email and login. for example:
{
    "email" : "art@mail.com",
    "password" : "9315"
}