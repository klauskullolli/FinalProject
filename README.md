# Clothes Store 

This project is a clothes shoping site:


Simple DB with 4 table: users with two roles admin and user, clothes, bills and bag.<br/>
Users can buy clothes, clothes are added to the bag and when type print a pdf bill is created. <br/>
After typing print bill the bag is emptied.<br/>
Clothes are displayed using api that retrieve all clothes. We have used Ajax for this call.<br/>
Same is done for clothes filtering according to the type.<br/>
At admin part, admin can add clothes, add user, delete users, delete clothes, <br/>
update users, clothes and check bills.<br/>
Clothes deletion and user deletion is done using api. <br/>
Api are called inside the script using fetch (this help to delete clothes/users deletion can be 
without reloading the page).<br/>
For db is used pdo because with bind can sanitarize data.<br/>
Inside forms are used validation and snitarizers.<br/>

------
Technologies used are: PHP, Apache, PDO, Xampp MYSQL, CSS, HTML, JavaScript <br/>
