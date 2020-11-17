#My Closet

Our plans for this Homework:

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

Accomplished tasks:

- added more pictures for a larger database to show different combinations of clothing types
  - over 50 pictures
- login/logout finished
  - logs out user after 30 minutes of inactivity
  - log out button implemented
- classes/database/backend finished
  - database slightly updated to work with classes better (i.e. removing temp from database info since it is setup in Clothing object)
  - generates random outfits 
    - filters through clothes in closet based on occasion and temperature
    - is in a class of its own
    - created array objects in closet as a way to temporarily hold the filtered clothes
  - can successfully read from the SQL database and insert into Closet object's arrays
- user upload is successful
  - user can upload photo, select type of clothing (bottom, top, sweater, or onepiece)
  - once type is selected, then a specific dropdown menu appears with the specific category
    - bottoms: pants/shorts/skirts, shirts: t-shirt/longshirt/blouse/tanktop, sweaters: jackets/cardigans/pullovers, onepieces: shortdresses/longdresses/jumpsuits/rompers
  - user also gives input of clothing color, type of occasion, and if it is patterned
- slideshow of full closet
  - separated by tops, bottoms, onepieces, and sweaters
  - displays the images of the clothes
  - switch between different images using the previous and next buttons
  
Differences from Original Plan:

- better UI (for mobile-friendly view/modernization) was not implemented
  - the random outfit generator/classes took more time and effort than expected
  
Next Deadline Plan: 

11/15-12/21
- Connect Frontend and Backend, publish site
  - Make sure that backend is responding well to the frontend request
  - if have time, use github.io to publish
- Knowledge: Integration Layer, publishing
  - Learning more about sending in user request to display information
  - Figuring out ways we can publish the website
- Test our classes with our actual clothing pictures (CHANGE: already done!)
- User upload: user can upload their own images to add to the database (CHANGE: already done!)
- Make sure frontend and backend work nicely and CSS
- NEW: Implement better UI
