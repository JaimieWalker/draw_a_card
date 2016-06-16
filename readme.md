### Set up environent
 1. Fork project
 1. I used xampp in order to run the code, as it was the quickest and easiest way to start and run the project. As long as a database named 'blackjack' is created, the code should run just fine. The database needs to be ran on localhost at port 3306 as a mysql database. You can change the .env file if you want to run it on a different port or on a specific host machine.
 
### The Project

 2. To start application run. php artisan migrate:refresh . php artisan db:seed --class CardsSeeder . php -S localhost:8888 -t public . I'm using PHP 7.06.
 2. The User model has the users name, email and password as well as a token used to cache the user.
 2. The Card model in the database has the name of the card and the image url of th card, which is used to display the card. Currently to keep it simple there are no relationships between different models.
 2. The CardsController class was created with two actions. The index action which shows all the cards in the database, and the randomCard action, which grabs a random card on page load as well as when the random card button is clicked.
 2. You can login to the application, but only after you register first. Being logged in or not doesn't affect the application.
 2. The pages are rendered using the respected  views in the resources/auth folder.
 2. In the resources folder, there is a cards view as well with an index page that displays all the cards with their respective names.
 
 
 My main goal was to get used to the laravel framework as well as create somewhat of an api. The application has the ability to get all the cards in the database, as well as pull any random card from the database.
