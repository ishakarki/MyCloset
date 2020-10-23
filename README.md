# MyCloset
Project for CSCI 3010.

By: Vananh Le & Isha Karki

This project is a website that allows users to essentially have their entirety of 
their closet all in one place. Based on a user's input of occasion or weather, our program will
find a relevant outfit for the user from the clothes in their closet. 

This project will heavily rely on PHP to act as the front end, back end, and integration layer. We intend to
use HTML/CSS for the front-end from PHP, as well as use SQL for the database.

To run this project, you must have XAMPP downloaded to your computer. XAMPP is a web server solution stack package developed by Apache Friends. Upon downloading, 
please be sure to start the MySQL Database server as well as the Apache Web Server. This will allow us to view the project in your browser.

On Mac, you need to access your Applications folder where you'll see the folder containing the XAMPP files. In there, we currently store our MyCloset project. 
You might have to access the base directory of your Mac to see the XAMPP folder under Applications.

On Window 10, you would need to access you Local Disk, find the htdocs folder in the XAMPP folder. You must store your MyCloset project within the htdocs folder. To run the application, you need to have XAMPP running in the background (APACHE and MySQL started). 

To see the project in your browser, access your local host port for XAMPP / the foldername (in our case it will be localhost/MyCloset). Note the if you have a different port in your XAMPP you must include that port in the following manner (localhost:portnumber/MyCloset) 

link to download XAMPP: https://www.apachefriends.org/index.html


To set up the database:

Make sure XAMPP is started!

Create a database call mycloset.

Execute the following SQL queries:

>CREATE TABLE IF NOT EXISTS account(
>    id INT(11) AUTO_INCREMENT, 
>    firstname TINYTEXT,
>    lastname TINYTEXT,
>    username TINYTEXT,
>    pwd LONGTEXT,
>    PRIMARY KEY(id)
);

>INSERT INTO account
>   (firstname,lastname,username,pwd)
>VALUES
>    ('firstname','lastname','yourusername',’yourpassword’
);

>CREATE TABLE IF NOT EXISTS clothing( idclothing INT NOT NULL AUTO_INCREMENT, typeofclothing TINYTEXT, color TINYTEXT, temp INT, pattern TINYTEXT, occasion INT, file_title >LONGTEXT, PRIMARY KEY(idclothing) 
);

>CREATE TABLE IF NOT EXISTS outfits( idOutfit INT NOT NULL AUTO_INCREMENT, name TINYTEXT, bottoms INT, shirts INT, sweaters INT, onepieces INT, temperature INT, occasion INT, >PRIMARY KEY(idOutfit) );


