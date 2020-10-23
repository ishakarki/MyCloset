#My Closet

Our plans for this Homework:

10/4 - 10/10
- Research about PHP login
- Set up the classes and the necessary functions needed for the backend
- Take pictures of clothing
- Knowledge: understand PHP login
- Vananh: Work on setting up php login page
- Isha: gather all of clothing pictures

10/11-10/17
- Implement the database and test the necessary function to make sure it is rock solid
- Knowledge: understanding the index of MySQL
- Vananh: work on database design, create table, columns
- Isha: Figure out inheritance

10/18-10/24
- Test backend to make sure everything is as should be
- Vananh: double check connection to database, set up PHP to intake sql statements
- Isha: Work more on classes set up

Accomplished tasks:
- Pictures of clothing for basic database
- Basic graphics
  - added logo
  - pink theme
- SQL database setup (tables, columns, variables)
- Functioning sign in pages ![screenshot of login page](screenshots/loginpage.png)
  - correct login takes you to dashboard, ![screenshot of home page](screenshots/homepage.png)
  - incorrect password says incorrect password, ![screenshot of incorrect password](screenshots/incorrectlogin.png)
  - non existing user says user not found ![screenshot of user not found](screenshots/usernotfound.png)
  - after 30 minutes of inactivity, the site will return to login in page
  - After learning more about the login system, we managed to get ahead and implement our login right away (instead of waiting for the next homework deadline).
  - database connection works for signing in. 
  - account table is set up in phpMyAdmin, containing the user informations (firstname, lastname, username, and password)
- Classes & Inheritance around 70% done
  - There were a few modification with our classes, outside of the clothing, closet, and generator classes, we concluded that we needed to implemented a few child classes that inherit from the clothing classes, that is a bottom class, top class, onepiece class, and sweater class. We decided this was necessary because having these classes will help us differentiate between different type of clothing.
  - Classes we have done so far:
    - Clothing Class: has get method to return information (type, color, temp, pattern, occasion, file tile)
    - In order to (potentially) implement Prototype design pattern, need to include some sort of Clone method
    - Closet Class: holds private variables of arrays of each subclass of Clothing (bottoms, shirts, sweaters, onepieces)
    - things to implement: how the saved outfits will be stored, where the outfit generator function will belong (class of its own or Closet function?)

Next Deadline Plan: 

10/25 -10/31
- Start working on the PHP login (CHANGE: PHP login already implemented, so now we only need to include a logout button)
- Design User Interface with an updated Figma
- Knowledge: PHP
- Vananh: Finalize PhP login
  - mostly satisfied with current features - logs in properly, outputs correct error messages, returns user back to login page
    after 30 minutes of inactivity
  - things to add: log in vs log out feature
- Isha: Finalize classes 
  - currently have a rough draft of the classes
  - need to implement mentioned features: how the saved outfits will be stored, where the outfit generator function will belong (class of its own or Closet function?)
  - also find out the design pattern if Prototype doesn't work out

11/1-11/7
- Start implementing the HTML and work on CSS for better User Interface Design
- Present clothing onto webpage (CHANGE: added task to test out if pictures are presented well onto our page, before we start implementing the generation of outfits)
- Vananh: work on CSS
- Isha: create better graphics/interface w/CSS - create a nicer logo, possibly animated?
- to work on for both: try and "modernize" the UI using something similar to Bootstrap, test how the site looks from a mobile view (i.e. making the window size smaller), test pictures' display

11/15-12/21
- Connect Frontend and Backend, publish site
- Knowledge: Integration Layer, publishing
- Test our classes with our actual clothing pictures (CHANGE: added task, we want to get this done earlier to make sure we have enough time to work around errors)
- Vananh: Make sure frontend and backend work nicely
  - do the correct images come out? do the buttons link to right pages?
- Isha: User upload
  - implement user upload, where user can upload their own images to add to the database
