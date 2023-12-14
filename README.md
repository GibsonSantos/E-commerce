# E-Commerce Electronics Store
.
Welcome to our E-Commerce Electronics Store! This project provides a platform for buying and exploring a variety of electronic devices, including TVs, PCs, smartphones, and more.

## Features

### 1. User Authentication

Secure user authentication is implemented to ensure a personalized experience for each user. Users can create accounts, log in, and enjoy a tailored shopping experience.

### 2. Home Page

The home page displays a curated list of available electronic devices for sale. Users can easily navigate through the products and discover the latest in technology.

### 3. Device Details

Click on any device to view detailed information, specifications, and pricing. Make informed decisions by exploring the features of each product.

### 4. Category Search

Effortlessly find devices by category using the search functionality. This feature allows users to quickly narrow down their choices and find the products they are interested in.

### 5. Shopping Cart

Add desired devices to your cart with a simple click. The shopping cart keeps track of selected items, providing a seamless shopping experience.

### 6. View and Edit Cart

Users can easily view the list of items in their cart and make adjustments as needed. Add or remove items to create the perfect shopping cart tailored to your preferences.

## Technologies Used

This project is built using a powerful stack of technologies to ensure a robust and scalable solution.

- **Laravel**: A PHP web application framework that provides an elegant syntax and tools for tasks like routing, authentication, and caching.

- **PostgreSQL**: A powerful, open-source relational database system used to store and manage the project's data.

- **Nginx**: A high-performance web server that efficiently handles HTTP and reverse proxy duties.

- **pgAdmin**: A web-based administration tool for managing PostgreSQL databases, making it easy to interact with the database.

- **Docker**: Containerization technology is employed to simplify the deployment process and ensure consistency across different environments.

## How to Install and Run the Projectt

1. ``` git clone https://github.com/GibsonSantos/E-commerce.git ```
2. ```docker compose build```
3. ```docker compose up -d```
4. ``` docker compose exec app composer update  ```
5. Copy ```.env.example``` to ```.env```
6. ``` docker compose exec app php artisan key:generate  ```
7. ``` docker compose exec app php artisan migrate  ```
8. ``` docker compose exec app php artisan db:seed --class=UserSeeder  ```
9. ``` docker compose exec app php artisan db:seed --class=ProductSeeder  ```
10. You can see the project on ```127.0.0.1:3000```

**Warning: This Project is in Development**
