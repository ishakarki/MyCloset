#My Closet

Our plans for this Homework:

Our plans for this homeworking included implementing the logout button for when the user sign in and want to sign out. We also needed to work on the classes and functions to generate the outfits. This would include making the clothing class, closet class, and the outfitcreator class. The clothing class is in charge of creating the clothing object, including bottom, top, sweater, and one piece. The closet class is in charge of organizing this objects into array so that the outcreator class can choose from these array to pick out the perfect the outfit for the occasion and temperature. We needed to figure out how the saved outfits will be stored, where the outfit generator function will belong (class of its own or Closet function?). We also needed to test out if the pictures are presented well onto our page before we start implementing the geration of before we start implementing the generation of outfits. We wanted to have a basic way of displaying outfits on our webpage and how to display everything within the clothing database insto full closet. We want to try and and "modernize" the UI using something similar to Bootstrap, test how the site looks from a mobile view (i.e. making the window size smaller), test  pictures' display.

Since this is a group project Isha and Vananh wanted to have hands-on and knowledge of everything within the page. Thus although Isha's main fort was the classes and Vananh's being the forms for the user interaction, we switch on and off so that we had a good idea of how everything worked.

Accomplished tasks:

We met most of our plans for this homework. The logout button has been successfully implemented and is currently placed on the navigation bar. Now the user can login and either logout immediately or be automatically logged out after 30 minutes. We have successfuly implemented our classes, database, and backend. We did had a problem at the beginning while trying to figure out how to declare classes, and how the implement inheritance since the language was not that familiar to us. However, we have now successful created the classes, database, and the backend...

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

#Goals for the next deadline

For the next deadline, we plan to successfully display the results (the images for the outfit) to our website, in order to do that we will have to update the way it is displaying the outfit for a better layout. We will have to work on the CSS to make sure that the frontend is displaying the images nicely. Our frontend still need a bit of work, since it looks a bit plain right now. We plan to have the full closet be an interactive page, where if the user hover on the the image of a closet. it will display what is inside the closet. We will also update on navigation bar so that it is more pleasing to the eye. To do so, we will update the font and have larger spaces between the each button. In our next step, we also plan to have a feature where the user is able to save their favorite oufit base one what the program has suggested before. To do so we will need to add a button beside the generated outfit, that will take the information from the outfit to push to the table called outfit. These outfits will be displayed in the favorite page. In the form where the user upload the image, we plan to work on displaying the image when it is uploaded so that the user can reference to the picture while filling out the form.



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


