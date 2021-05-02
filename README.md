# Webapp-Final-Project

Proposal - Task Delegation

1. MIJANUR

- Introduction
- References

2. ZAWAD

- Objective
- Features and functionalities
- References

3. SHEILLA

- ERD
- References

4. AZLINA ARNA NUR (1630558)

- Define views, controllers, routes and models 
- References

---

Project Development - Task Delegation

1. Azlina

2. Sheilla

3. Zawad

4. Mijanur

---


## PROJECT PROPOSAL

<br> 

#### 1.0 Introduction

> Intro.....

#### 2.0 Objective
 
   <ul>
   <li>To ease food ordering process</li>
   <li>To allow the user ordering the food online and get the delivery at their place</li>
   <li>To allow the system to take order and add the menu on cart</li>
   <li>To allow the user to update confirm and cancel the order</li>
   <li>To allow the system store and show order history and total price</li>
   </ul>

#### 3.0 Features and functionalities

   <ul>
   <li>View food menu and check details</li>
   <li>Add drop item into cart</li>
   <li>Calculate total price for billing</li>
   <li>Confirm order with billing and delivery address</li>
   <li>Update or cancel order</li>
   </ul>
 
#### 4.0 Entity Relationship Diagram (ER Diagram)
 **Entity Relationship Diagram :**

<br>

![Entity Relationship Diagram](/Resources/ERD.jpeg)

<br> 

#### 5.0 Define Route, Controller, View and Model

**Views :**

   <ul>
   <li>home.blade.php : Displays food menu as a Home page once user successfully register and login</li>
   <li>login.blade.php : Displays User Log in page</li>
   <li>register.blade.php : Displays User Registeration page</li>
   <li>cart.blade.php : Displays Cart page where added food with add and drop button</li>
   <li>checkout.blade.php : Displays foods with details from cart and calculate total price with a form for billing and delivery address to confirm order</li>
   <li>details.blade.php : Displays order history with update and cancel button</li>
   </ul>
   
<br>

**Controllers :**

   <ul>
   <li> HomeController.php :</li>
   <ul>
   <li> Allows user data from registeration form to be passed to the database</li>
   <li> Allows user data to be retrieved from database to proceed user login to Home page</li>
   <li> Allows user to check food menu by retriving food menu from database</li>
   </ul>
   <br>
   <li> CartController.php : </li>
   <ul> 
   <li> Allows user to add or remove food from cart</li>
   <li> Allows user to add quantity and calculate the food price</li>
   </ul>
   <br>
   <li> CheckoutController.php :
   <ul>
   <li> Calculate total bills of the foods</li>
   <li> Get user delivery and billing adress</li>
   <li> Allow user to confirm order</li>
   </ul>
   <br>
   <li> DetailsController.php :
   <ul>
   <li> Allow user to check order details by retriving data from database</li>
   <li> Allow user to update and cancel order</li>
   </ul>

   </ul>
  
 <br>

**Routes :**

   <ul>
   <li>Route for return views for Home page which corresponds with HomeController.php and database</li>
   <li>Route for return views for cart page and cart functions corresponds with CartController.php</li>
   <li>Route for return views for checkout page and checkout functions corresponds with CheckoutController.php</li>
   <li>Route for return views for Details page and details function corresponds with DetailsController.php
   </li>
   <li>Route for return views for register and login page corresponds with user authentication</li>
   </ul>
   
 <br>
 
**Models :**

   <ul>
   <li> Customer has one-to-many relationship with orders (One customer can have many orders)</li>
   <li> Order has one-to-many relationship with cart (many food from the cart can be selected for one order)
   </li>
   <li> Cart has one-to-many relationship with food (Many food can be added in cart)
   </ul>

<br> 

**User Athentication :**

   <ul>
   <li> User registeration
   <li> User login
   <li> User password reset
   <li> User update profile
   </ul>
 
 <br>

#### 6.0 References

    Markdown Cheat Sheet. (n.d.). Retrieved January 01, 2021, from https://www.markdownguide.org/cheat-sheet/
