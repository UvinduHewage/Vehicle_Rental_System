# 🚗 Vehicle Rental System

A web-based application that facilitates the rental of vehicles such as cars, bikes, and trucks for specified periods. This system offers a convenient and flexible solution for both customers seeking transportation and administrators managing vehicle rentals.

## 🌟 Features

* **User Registration & Authentication**: Secure sign-up and login functionalities for customers.
* **Vehicle Listings**: Browse available vehicles with detailed information.
* **Rental Options**: Choose between rentals with or without a driver.
* **Inquiry Management**: Submit and manage rental inquiries seamlessly.
* **Payment Processing**: Enter and save card details securely.
* **Administrative Controls**: Admin panel for managing vehicles, users, and inquiries.

## 🛠️ Technologies Used

* **Frontend**: HTML, CSS, JavaScript
* **Backend**: PHP
* **Database**: MySQL


## 🚀 Getting Started

### Prerequisites

* **Web Server**: [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](https://www.wampserver.com/en/)
* **PHP**: Version 7.0 or higher
* **MySQL**: Version 5.7 or higher

### Installation

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/UvinduHewage/Vehicle_Rental_System.git
   ```

2. **Set Up the Project**:

   * Place the cloned folder in your web server's root directory (e.g., `htdocs` for XAMPP).
   * Import the provided SQL file into your MySQL database to set up the necessary tables.

3. **Configure the Database**:

   * Open `config.php` and update the database credentials:

     ```php
     $servername = "localhost";
     $username = "your_username";
     $password = "your_password";
     $dbname = "vehicle_rental_db";
     ```

4. **Run the Application**:

   * Start your web server and navigate to `http://localhost/Vehicle_Rental_System/` in your browser.

## 🧪 Usage

* **Homepage**: View available vehicles and navigate through the site.
* **Register/Login**: Create an account or log in to access rental features.
* **Browse Vehicles**: Explore the fleet and select vehicles based on preferences.
* **Submit Inquiries**: Use the inquiry form to request rentals.
* **Admin Panel**: Access administrative functionalities to manage the system.

## 📌 Future Enhancements

* **Responsive Design**: Optimize the application for mobile devices.
* **Enhanced Security**: Implement advanced security measures for data protection.
* **Email Notifications**: Notify users about booking confirmations and updates.
* **Online Payment Integration**: Incorporate payment gateways for seamless transactions.
