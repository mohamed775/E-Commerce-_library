<div align="center">
  <h1>🚀 E-Commerce Library </h1>
</div>

## 📄 Description

Welcome to the E-Commerce Library project built with Laravel! This web application serves as a platform for managing an E-Commerce library, providing features for browsing, purchasing, and managing books. It utilizes Laravel's powerful features along with PHP traits for common functionality and returns JSON responses for certain interactions.

## Table of Contents
- [Installation](#installation)
- [Features](#features)
- [Usage](#usage)
  - [Authentication](#authentication)
  - [Routes](#routes)
  - [Error Handling](#error-handling)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)
- [Acknowledgments](#acknowledgments)

  
## 📦 Installation

To get started with the E-Commerce Library, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/mohamed775/e-commerce-library.git
Navigate into the project directory:
 - cd e-commerce-library
   
Install dependencies using Composer:

 - composer install

Copy the .env.example file to create a .env file:

- cp .env.example .env

Generate an application key:
 - php artisan key:generate
 - Configure your database connection in the .env file.
 - Run database migrations to create the necessary tables:

php artisan migrate
 - Serve the application:

php artisan serve
 - Your E-Commerce Library should now be accessible at http://localhost:8000.

## 🚀 Authentication

This web application includes authentication functionality for user registration and login. Users can register for a new account and login using their credentials.



## ![API Endpoint Icon](https://img.icons8.com/plasticine/100/000000/api-settings.png)


- GET /login: Display the login form.
- POST /login: Process the login form submission.
- GET /register: Display the registration form.
- POST /register: Process the registration form submission.
- POST /logout: Logout the authenticated user.
- GET /books: Display a list of all books in the library.
- GET /books/{id}: Display details of a specific book.
- GET /cart: Display the user's shopping cart.
- POST /cart/add/{id}: Add a book to the shopping cart.
- POST /cart/remove/{id}: Remove a book from the shopping cart.
- POST /checkout: Process the checkout of the user's shopping cart.
- GET /orders: Display the user's order history.
- GET /orders/{id}: Display details of a specific order.


## ![Hammer Icon](https://img.icons8.com/color/48/000000/hammer.png)

- **Laravel**: A PHP web application framework for building web applications.
- **PHP**: The scripting language used by Laravel.
- **Composer**: A dependency manager for PHP, used for installing Laravel packages and dependencies.
- **Git**: A version control system used for managing the project's source code.
- **GitHub**: A web-based platform for hosting and collaborating on Git repositories.

## ✨ Features

- User Authentication: Allow users to register, login, and manage their accounts.
- Book Management: Add, edit, and delete books from the library.
- Shopping Cart: Enable users to add books to their shopping cart and proceed to checkout.
- Order Management: View order history and manage orders.

## 🤝 Contributing

- Contributions are welcome! Feel free to open issues or submit pull requests for any improvements or features you'd like to see added to the project.

## 📝 License
---------------------------------------------------------
- This project is licensed under the MIT License.
---------------------------------------------------------

## 📬 Contact

- Feel free to customize this template according to your project's specific requirements and implementation details. Let me know if you need further assistance or have any questions!

