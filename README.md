# 🌸 CosmiKart - Beauty Product Online Store

**CosmiKart** is a comprehensive **Laravel-based e-commerce web application** designed specifically for beauty and cosmetic products. This full-stack solution provides a seamless online shopping experience with robust features for both customers and administrators, including product catalog management, customer management, shopping cart functionality, secure checkout, and order tracking capabilities.

## 🌟 Project Overview

CosmiKart delivers a complete beauty product retail solution with customer management, comprehensive product catalog, and advanced order tracking features. Built on the reliable WAMP stack (Laravel, Apache, MySQL, PHP), it ensures scalability and performance for modern e-commerce needs.

---

## 🚀 Key Features

### 🛍️ Customer Features
- **Product Browsing**: Explore products with detailed categories, specifications, and pricing
- **Shopping Cart**: Add items to cart with quantity management and secure checkout process
- **User Account Management**: Register, login, and manage personal account details
- **Order History**: View past purchases and order details
- **Order Tracking**: Monitor order status updates from purchase to delivery
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices

### 👩‍💼 Admin Features
- **Product Management**: Add, edit, delete, and organize products with categories
- **Customer Management**: View and manage customer records and profiles
- **Order Management**: Track, update, and process customer orders
- **Dashboard Analytics**: Comprehensive overview of sales, customers, and business metrics
- **Inventory Control**: Monitor stock levels and product availability

---

## 🛠️ Tech Stack

| Component | Technology |
|-----------|------------|
| **Framework** | Laravel (PHP) |
| **Web Server** | Apache |
| **Database** | MySQL |
| **Frontend** | Blade Templates, Bootstrap, HTML5, CSS3, JavaScript |
| **Development Environment** | WAMP Stack (Windows, Apache, MySQL, PHP) |
| **Package Management** | Composer (PHP) |

---

## 📂 Installation & Setup

Follow these steps to get CosmiKart running on your local machine:

### Prerequisites
- WAMP/XAMPP installed on your system
- PHP >= 8.0
- Composer

### Step-by-Step Installation

1. **Clone the Repository**
   ```bash
       git clone https://github.com/IamSaqibJaved/cosmikart.git
   cd cosmikart
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Environment Configuration**
   ```bash
   # Copy the environment file
   cp .env.example .env
   ```
   
   **Update the following variables in `.env`:**
   ```env
   APP_NAME=CosmiKart
   APP_ENV=local
   APP_KEY=
   APP_DEBUG=true
   APP_URL=http://127.0.0.1:8000
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=cosmikart
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Database Setup**
   ```bash
   # Create database (make sure MySQL is running)
   # Then run migrations and seeders
   php artisan migrate --seed
   ```

7. **Start the Development Server**
   ```bash
   php artisan serve
   ```

Your application will be available at: **http://127.0.0.1:8000** 🎉

---

## 👥 User Roles & Permissions

### 🛒 Customer Role
- **Registration & Authentication**: Create account and secure login
- **Product Discovery**: Browse and search through beauty products
- **Shopping Experience**: Add to cart, checkout, and payment processing
- **Order Management**: View order history and track current orders

### 👑 Admin Role
- **Product Catalog Management**: Full CRUD operations on products and categories
- **Order Processing**: View, update, and manage all customer orders
- **Customer Support**: Access and manage customer records and inquiries
- **Business Intelligence**: Access to sales analytics and performance metrics

---

## 🤝 Contributing

We welcome contributions to CosmiKart! Here's how you can help:

1. **Fork the Repository**
   ```bash
   git fork https://github.com/your-username/cosmikart.git
   ```

2. **Create a Feature Branch**
   ```bash
   git checkout -b feature/your-amazing-feature
   ```

3. **Make Your Changes**
   - Write clean, documented code
   - Follow PSR coding standards
   - Add tests for new features

4. **Commit Your Changes**
   ```bash
   git commit -m 'Add some amazing feature'
   ```

5. **Push to Your Branch**
   ```bash
   git push origin feature/your-amazing-feature
   ```

6. **Open a Pull Request**
   - Describe your changes clearly
   - Include screenshots for UI changes
   - Reference any related issues

---

## 🐛 Bug Reports & Feature Requests

- **Bug Reports**: Please use the [GitHub Issues](https://github.com/IamSaqibJaved/cosmikart/issues) page
- **Feature Requests**: Open an issue with the `enhancement` label
- **Security Issues**: Please email directly to maintain responsible disclosure

---

## 📜 License

This project is licensed under the **MIT License**. You are free to use, modify, and distribute this software. See the [LICENSE](LICENSE) file for full details.

---

## 👨‍💻 Author

**Saqib Javed**  
*Full Stack Developer*

- 📧 Email: [saqibjaved161@gmail.com]
- 💼 LinkedIn: [https://www.linkedin.com/in/saqibjaved161/]

---

## 🙏 Acknowledgments

- Laravel Community for the excellent framework
- Bootstrap team for the responsive UI components
- All contributors who helped make this project possible

---

## 📊 Project Stats

- **Language**: PHP (Laravel Framework)
- **Database**: MySQL
- **Frontend**: Blade Templates + Bootstrap
- **Status**: Active Development

---
