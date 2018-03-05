# online-bakery-website
#### Website for an imaginary bakery (created for a Uni assignment)

## Contents:

This main folder 'BakeryWebsite' contains 25 webpages:

  -8 html pages within the main folder  
	-5 html pages within the bread folder (located in the main folder)  
	-5 html pages and 1 php page within the cake folder (located in the main folder)  
	-6 html pages within the confec folder (located in the main folder)	
  
The main folder also contains a folder 'images' which contains all the images on the website:

  -the images folder contains 3 other folders and 6 images (the page header image, two id pics, fb logo, email logo
  and a phone logo)  	<br/>
  -the folders within the images folder are 'bread' 'cake' and 'confec', and contain the related images for each <br/>
	
  
The main folder also includes two more documents:

  -This README.txt file 
  -The 'cake.sql' file which contains the source code used to make a SQL table on an XAMPP hosted database <br/>
	
## Assignment Requirements

The assignment for which this website was created had a number of requirements:
	• allow the user to ‘purchase’ items from the site; <br/>
  • allow the customer to enter their login details and have login details validated (via a login screen) before receiving a summary of the order;   
	• perform form validation through JavaScript to ensure that: <br/>
  
		   o text fields are not empty;   
		   o a valid email address is entered.   
           
• include a slideshow which displays a different image each time the page is loaded; <br/>
• access and change HTML on the web page through the DOM; <br/>
• access and change styling through the DOM;  <br/>
• demonstrate the use of events;  <br/>
• connect to a database that contains relevant site information (eg., product info);  
• be hosted in the cloud (eg., Azure). <br/>
	 
The user of the website can purchase items from the website by first logging in via the logIn.html (located in main folder). After logging in they will be taken to the cart.html (also located in the main folder) where they can input the quantity of the items they wish to purchase etc. To access the log in page on the website itself the user can click on the Check Out tab on the navigation side bar on any page.

Form validation is used throughout the website. LogIn.html demonstrates form validation through Javascript, ensuring that fields are not empty and that the values entered are correct (including email format). Form validation through HTML is also used on the cart.html and contactUs.html.

Several slideshows are featured on the website. On the homepage index.html (located in the main folder) there is a slideshow which displays a random image from an array each time the page is refreshed or loaded. There are also slideshows which are manually controlled by both dot buttons and previous and next buttons on several pages within the BakeryWebsite/confec folder. cupcake.html, donut.html and danish.html all feature this type of slideshow. They can be accessed and viewed on a browser by clicking on the 'Confectionary' tab from the navigation side bar and then by clicking on their corresponding images.

Changing of HTML through DOM has been demonstrated on the website on the bread.html, cakes.html and confec.html pages. All are located within the main folder.

Changing of styling through the DOM is demonstrated on the footers of the index.html, faq.html and contactUs.html pages, all located within the main folder. All use an 'on-click' button to cause a function changing different elements of styles: i.e. the background colour changes on the index.html page, while the font style changes on the faq.html page while the headings change on the contactUs.html page.

The use of events is also seen a number of times elsewhere on the website (see the submission of forms etc). As well as 'onclick', the 'onload' event is also used on the logIn.html page.

The website is connected to a database hosted on XAMPP. A table from the database is found on the special.php file/webpage. This is located within the BakeryWebsite/cake folder and is accessible and viewable on a browser by visiting the 'Cakes' tab on the side bar navigation and clicking on the image of the wedding cake (bottom right image). The original SQL code is viewable on the SQL file located in the main folder.

This website was hosted on Azure at: http://rachelsbakery.azurewebsites.net/ from May 2017 until October 2017.
