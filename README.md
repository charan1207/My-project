# My-project
						ONLINE FRUIT MARKET


---> First install the XAMPP web server on your computer using link : https://www.apachefriends.org/download.html
---> Click XAMPP for Windows. It's a grey button near the bottom of the page.
     Depending on your browser, you may first have to select a save location or verify the download.
---> Double-click the downloaded file. This file should be named something like xampp-win32-7.2.4-0-VC15-installer, and you'll find it in the default downloads location (e.g., the "Downloads" folder or the desktop).
---> Click Yes when prompted. This will open the XAMPP setup window.You may have to click OK on a warning if you have User Account Control (UAC) activated on your computer.
---> Click Next. It's at the bottom of the setup window.
---> Select aspects of XAMPP to install. Review the list of XAMPP attributes on the left side of the window; if you see an attribute that you don't want to install as part of XAMPP, uncheck its box.
    By default, all attributes are included in your XAMPP installation.
---> Click Next. It's at the bottom of the window.
---> Select an installation location. Click the folder-shaped icon to the right of the current installation destination, then click a folder on your computer.
	If you have the UAC activated on your computer, avoid installing XAMPP in your hard drive's folder (e.g., OS (C:)).
	You can select a folder (e.g., Desktop) and then click Make New Folder to create a new folder and select it as the installation destination.
---> Click OK. Doing so confirms your selected folder as your XAMPP installation location.
---> Click Next. You'll find it at the bottom of the page.
---> Uncheck the "Learn more about Bitnami" box, then click Next. The "Learn more about Bitnami" box is in the middle of the page.
---> Begin installing XAMPP. Click Next at the bottom of the window to do so. XAMPP will begin installing its files into the folder that you selected.
---> Click Finish when prompted. It's at the bottom of the XAMPP window. Doing so will close the window and open the XAMPP Control Panel, which is where you'll access your servers.
---> Select a language. Check the box next to the American flag for English, or check the box next to the German flag for German.
---> Click Save. Doing so opens the main Control Panel page.
---> Start XAMPP from its installation point. If you need to open the XAMPP Control Panel in the future, you can do so by opening the folder in which you installed XAMPP, right-clicking the orange-and-white xampp-control icon, clicking Run as administrator, and clicking Yes when prompted.
	When you do this, you'll see red X marks to the left of each server type (e.g., "Apache"). Clicking one of these will prompt you to click Yes if you want to install the server type's software on your computer.
	Counterintuitively, double-clicking the xampp_start icon doesn't start XAMPP.
---> Resolve issues with Apache refusing to run. On some Windows 10 computers, Apache won't run due to a "blocked port". This can happen for a couple of reasons, but there's a relatively easy fix:[1]
	Click Config to the right of the "Apache" heading.
	Click Apache (httpd.conf) in the menu.
	Scroll down to the "Listen 80" section (you can press Ctrl+F and type in listen 80 to find it faster).
	Replace 80 with any open port (e.g., 81 or 9080).
	Press Ctrl+S to save the changes, then exit the text editor.
	Restart XAMPP by clicking Quit and then re-opening it in administrator mode from its folder.

DATABASE INSTALLATION:

---> Open your browser and enter http://localhost/phpmyadmin. This will bring you to the MySQL setup page:

---> Enter a name for the database, then click on the Create button. The name must be 64 characters or less and composed of letters, numbers and underscores. Avoid using numbers at the start of the name. A good name should indicate the purpose of the database.
      For example: joomla_database or database_for_drupal.
     There should be no need to change the other settings:
---> Ensure the database was successfully created:
---> import the file db.sql into the database
---> Enter a name for the database as "foodadda" , then click on the create button.
---> Import the file foodadda.sql into the database created. 

PROCEDURE
---> folders are dumped into xampp/htdocs with project folder
---> Home page of the project is named as home.php
---> Open googlechrome and run the server using xampp by giving url as 
for eg;localhost/home.php
#home.php is the home page of the project.


//SELLER Information
---> Seller signup into the system using link as below
for eg: SellerRegistration.php
#sellerregistration gives the registration page of the seller.
---> Seller login into   the system using link as login
for eg: sellerlogin.php
#seller can login by giving credentials regarding email and password.
---> After entering the details database checks email and password using file
for eg;sellerLoginCheck.php
---> Database connectivity is given in the file as
for eg: sellerdashboard.php
---> fruits are added by the seller using php file as
for eg add_fruit_information.php
---> fruits information is reteived from the server using php file as
for eg get_fruit_information.php
---> fruits are delted by the seller using file as
for eg delete_fruit_information.php
---> fruits are updated using php file as
for eg update_fruit_information.php


//CUSTOMER Information
---> Customer signup into the system using link as customer
  for eg:BuyerRegistration.php
#customerregistration gives the registration page of the customer.
---> Customer login into the system using link as login
  for eg:Buyerlogin.php
#customer can login by giving credentials regarding email and password.
---> After entering the details database checks email and password using file
for eg;BuyerLoginCheck.php
---> customer can see the dashboard by using link as
for eg:buyerdashboard.php

//FOLDERS
---> images regarding webpages are given in img folder.
---> javascripts for validations and jqueries are given in js folder.
---> fonts for webpages are given in font folder.




