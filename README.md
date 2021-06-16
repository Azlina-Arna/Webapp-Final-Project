# Webapp-Final-Project

Proposal - Task Delegation

1. RAHMAN MD MIJANUR (1631849)

- Introduction
- References

2. ZAWAD WASIK AHMED (1912485)

- Objective
- Features and functionalities
- References

3. SHEILLA CHAIRIANDIA (1810502)

- ERD
- References

4. AZLINA ARNA NUR (1630558)

- Define views, controllers, routes and models 
- References

---

Project Development - Task Delegation

1. Azlina
- Set up project and blade templating
- User Authentication
- Route,Controller,View for Home Page 
- Route, controller,View for Product Details Page
- Database for Products (model, seeder, migration)

2. Sheilla
- Crud function to show user oder details page and update and cancel order funcion
- Route, Controller, View for crud function
- Database for order table

3. Zawad
- Route, Controller, View for Cartlist page
- Database for Cart (model, migration, functions, join table, remove from table, pull the data from table into view)

4. Mijanur
- Route, Controller, View for order page
- Calculate total price from cart

---


## PROJECT PROPOSAL

<br> 

#### 1.0 Introduction

>  In today’s age of fast food and take-out, many restaurants have chosen to focus on quick preparation and speedy delivery of orders rather than offering a huge dining experience. On the other hand, people nowadays have also chosen online platforms to make life easier and faster. So, our project, the online food ordering system, is a technique of ordering foods online and get the order at the door step. The main advantage of this system is that it greatly simplifies the ordering process for both the customer and the seller. When the customer visits the web page, they are presented with an interactive and up-to-date menu, complete with all available options and dynamically adjusting prices based on the selected options. To order food from the web application, they just need to register and login their accounts. After that, they can make a selection and the item is then added to their cart, which the customer can review the details of at any time before checking out. Customer then also can check their orders and update or cancel their order. Within this application, all items in the order are displayed, along with their corresponding options and delivery details, in a concise and easy to read manner.

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
   <li>detail.blade.php : Displays each menu details and user can buy now and add to cart after check the details</li>
   <li>cartlist.blade.php : Displays Cart page where added food with add and drop button</li>
   <li>checkout.blade.php : Displays foods with details from cart and calculate total price with a form for billing and delivery address to confirm order</li>
   <li>order.blade.php : Displays order history with update and cancel button</li>
   </ul>
   
<br>

**Controllers :**

   <ul>
   <li> HomeController.php :</li>
   <ul>
   <li> Allows user to check food menu by retriving food menu from database</li>
   <li> Allows user to check cartlist by retriving cartlist menu from database</li>
   <li> Allows user to remove and add food menu to the cart</li>
   <li> Allows user to cancel and update orders</li>
   </ul>
   

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
