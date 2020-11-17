#My Closet
Our Plans for this HW
10/25 -10/31
- Start working on the PHP login (CHANGE: PHP login already implemented, so now we only need to include a logout button)
- Design User Interface with an updated Figma
  - If needed, we will see if the current Figma fits the way we want the website to be presented and we will update the Figma as necessary
- Knowledge: PHP
  - learn how to use the php classes to present it onto the website
- Vananh: Finalize PhP login
  - mostly satisfied with current features - logs in properly, outputs correct error messages, returns user back to login page
    after 30 minutes of inactivity
  - things to add: log out feature
- Isha: Finalize classes 
  - currently have a rough draft of the classes
  - need to implement mentioned features: how the saved outfits will be stored, where the outfit generator function will belong (class of its own or Closet function?)
  - also find out the design pattern if Prototype doesn't work out

11/1-11/7
- Start implementing the HTML and work on CSS for better User Interface Design
- Present clothing onto webpage (CHANGE: added task to test out if pictures are presented well onto our page, before we start implementing the generation of outfits)
- Vananh: work on CSS:
  - Figure out how the outfits will be displayed onto the website
  - Figure out how to display the full closet
- Isha: create better graphics/interface w/CSS - create a nicer logo, possibly animated?
  - to work on for both: try and "modernize" the UI using something similar to Bootstrap, test how the site looks from a mobile view (i.e. making the window size smaller), test  pictures' display

11/15-11/21
- Connect Frontend and Backend, publish site
  - Make sure that backend is responding well to the frontend request
  - if have time, use github.io to publish
- Knowledge: Integration Layer, publishing
  - Learning more about sending in user request to display information
  - Figuring out ways we can publish the website
- Test our classes with our actual clothing pictures (CHANGE: added task, we want to get this done earlier to make sure we have enough time to work around errors)
- Vananh: Make sure frontend and backend work nicely and CSS
  - do the correct images come out? do the buttons link to right pages?
   - Figure out how the user will interact with the website: buttons request
- Isha: User upload
  - implement user upload, where user can upload their own images to add to the database

Acomplishments:

- Added logout button, placed on the navigation bar
    - When clicked logout, it will take the user back to the sign in page
- Slideshow
- Some changes in the table structure:
  - CLOTHING table: 
    - attribute idclothing, nameofclothing, typeofclothing, color, temp, occasion, and file_title are all NOT NULL
    - data type for idclothing changed from INT(11) to INT
  - OUTFIT table:
    - attribute bottom, sweater, top, sweater, and onepiece are FOREIGN KEYS from the CLOTHING table
    - attribute bottom, sweater, top, sweater, and onepiece are now of INT, not INT(11)

NEW SQL STATEMENTS:
>CREATE TABLE IF NOT EXISTS clothing( idclothing INT NOT NULL AUTO_INCREMENT, nameofclothing TINYTEXT NOT NULL, typeofclothing TINYTEXT NOT NULL, color TINYTEXT NOT NULL, pattern TINYTEXT, occasion INT(11) NOT NULL, file_title TINYTEXT NOT NULL, PRIMARY KEY(idclothing) );

>CREATE TABLE IF NOT EXISTS outfit( idoutfit INT NOT NULL AUTO_INCREMENT, name TINYTEXT NOT NULL, bottom INT, top INT, sweater INT, onepiece INT, temperature INT, occasion INT, PRIMARY KEY(idoutfit), FOREIGN KEY(bottom) REFERENCES clothing(idclothing), FOREIGN KEY(top) REFERENCES clothing(idclothing), FOREIGN KEY(sweater) REFERENCES clothing(idclothing), FOREIGN KEY(onepiece) REFERENCES clothing(idclothing) );
