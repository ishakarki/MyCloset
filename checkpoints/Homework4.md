# My Closet

## What was planned for this deadline:

Starting October 25th, we have plans to: implement a logout feature, design a new UI using Figma, finalize the rest of the PHP login, and finalize the classes. From our previous deadline, we had already implemented the login feature, so the only thing left is to create a logout feature. Another feature to add for this week is the idea to logout the user after 30 minutes of inactivity on the site. We also might recreate our Figma model to accurately design our final product. Another thing to do is finish the backend and properly generate/store the outfits that are randomly created using the generator class.
Other things we need to implement include: HTML/CSS for a better UI, test if our pictures can be presented well onto our page before implementing the generation of outfits, and create better graphics.

## What was accomplished for this deadline:

For this deadline, we added over 50 pictures to create a larger database. We did this to test/showcase the different options and combinations of clothing types (this was intended to be for our next deadline, but we moved it up to finish the backend). The features for the login (logging out after 30 minutes of inactivity, creating a log out button) were implemented successfully. We also finished the backend entirely. The classes are all fully implemented to account for the different functions we wanted to have. The database is also fully functional and is connected to our classes, so it can read from the database and insert into our Closet object's array of clothes. The database was slightly updated so that our Clothing class can set the temperature of the input based on the category of clothing it falls under (i.e. category Pant under Type Bottom has a different temperature from Shorts or Skirts). Functions that we finished in the classes include filtering through the dataset based on an input occasion type and temperature of the weather and then randomly generating outfits based on that filtered dataset. The generator accurately creates outfits such that you recieve only a bottom/shirt/sweater combination or a onepiece/sweater combination. This feature is also connected to our frontend, and successfully displays the images of the randomized outfit created by our generator. Another feature we implemented is the user upload (this was meant to be for our next deadline, but we moved it up to now in order to accurately test insertion into our database). The user upload has features including: upload button to upload a photo of your clothing and dropdown menus to categorize your input based on Type, Category, Occasion, and Pattern. The Category dropdown only shows up once the user has selected one of the options in the Type dropdown to avoid user error in selecting the wrong Category. There is a list of each of the Types and Categories below. The last feature we implemented for this deadline is the slideshows for the full closet. The full closet has a slideshow for each Type of Clothing and displays each of them using their file name. There are "previous" and "next" buttons to easily look through the entire set of clothes. 
The only difference from our original plan is the fact that there has not been any implementations of a better UI since we decided to instead create and develop the user upload feature, as well as test our database/classes using a large amount of pictures. By doing so, we now only have UI features to implement for our next deadline, which allows us more time to potentially implement some new features that we haven't decided on yet.

Here's a list of the different Types and the Categories within each one:
- Bottoms: Pant/Short/Skirt
- Shirts: T-Shirt/Long Shirt/Blouse/Tank Top
- Sweaters: Jacket/Cardigan/Pullover
- Onepieces: Short Dress/Long Dress/Jumpsuit/Romper
  
## Plans for the next deadline:

For the next and final deadline, we need to work on saving the outfits that the user likes on a separate page. We also need to work on our UI so that it looks cleaner and potentially mobile-friendly. The UI will be our main focus for this next deadline. Since most of our features are already implemented, we will come up with new features to add to our project as we see fit. 

# Video Runthrough

- [![link to youtube video](https://img.youtube.com/vi/https://youtu.be/38RlSerEYxg/0.jpg)](https://youtu.be/38RlSerEYxg)

# Screenshots
- accounts table in our database: 
- ![screenshot of account table](screenshots/account_pic.PNG)
- actual accounts in our database (user & pwd): 
- ![screenshot of account table data](screenshots/account_pic2.PNG)
- clothing table: 
- ![screenshot of clothing table](screenshots/clothing_table.png)
- first ~20 rows of clothing data (total around 50+): 
- ![screenshot of clothing table data](screenshots/clothing_data.png)
- outfit table: 
- ![screenshot of outfit table](screenshots/outfit_table.png)
