# Clothes Store 

This project is a clothes shoping site:


Simple DB with 4 table: users with two roles admin and user, clothes, bills and bag.
Users can buy clothes, clothes are added to the bag and when type print a pdf bill is created. 
After typing print bill the bag is emptied.
Clothes are displayed using api that retrieve all clothes. We have used Ajax for this call.
Same is done for clothes filtering according to the type.
At admin part, admin can add clothes, add user, delete users, delete clothes, 
update users, clothes and check bills.
Clothes deletion and user deletion is done using api. 
Api are called inside the script using fetch (this help to delete clothes/users deletion can be 
without reloading the page).
For db is used pdo because with bind can sanitarize data.
Inside forms are used validation and snitarizers.

------
Technologies used are: PHP, Apache, PDO, Xampp MYSQL, CSS, HTML, JavaScript 
