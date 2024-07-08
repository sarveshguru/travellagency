# Travel Agency Website

![Last Commit](https://img.shields.io/github/last-commit/sarveshguru/travellagency) 
![Total Commits](https://img.shields.io/github/commit-activity/y/sarveshguru/travellagency)
![Commit Activity](https://img.shields.io/github/commit-activity/m/sarveshguru/travellagency)
![Contributors](https://img.shields.io/github/contributors/sarveshguru/travellagency)

> A platform for users to explore travel packages, book trips, and learn about the agency, combining a user-friendly interface with robust functionalities.

## 📜 Project Description

The **Travel Agency Website** provides a seamless platform for exploring travel packages, booking trips, and learning about the agency. It ensures a user-friendly experience with real-time interactions and responsive design.

### 🚀 Features

- 💾 **Data Management**: Efficient storage and management of booking information in a database.
- 🧭 **User-Friendly Interface**: Easy navigation and visually appealing design.
- 🌍 **Explore Travel Packages**: Browse and book trips with an engaging interface.
- 📅 **Booking Functionality**: Users can book trips directly through the website.
- 📱 **Responsive Design**: Ensures usability across various devices.

### 🛠️ Technologies Used

![HTML](https://img.shields.io/badge/Frontend-HTML-orange)
![CSS](https://img.shields.io/badge/Frontend-CSS-blue)
![JavaScript](https://img.shields.io/badge/Language-JavaScript-yellow)
![Swiper.js](https://img.shields.io/badge/Slider-Swiper.js-green)
![PHP](https://img.shields.io/badge/Backend-PHP-purple)
![MySQL](https://img.shields.io/badge/Database-MySQL-lightblue)

- **Frontend**: HTML, CSS, JavaScript, Swiper.js
- **Backend**: PHP
- **Database**: MySQL

### 📷 Screenshots

| Home | About | Packages | Booking |
|:---------:|:------------:|:---------------:|
| ![Home](https://github.com/sarveshguru/travellagency/assets/72163818/cab56608-b730-43f7-b960-6de5f9b5f748) |
| ![About](https://github.com/sarveshguru/travellagency/assets/72163818/e069bc60-4036-458e-9dc8-6e009a1a9240) |
| ![Packages](https://github.com/sarveshguru/travellagency/assets/72163818/fb55bfee-3dc6-44a2-937b-f4f6d04ac5dd) |
| ![booking](https://github.com/sarveshguru/travellagency/assets/72163818/440f4ab6-c791-48c0-940f-90baddf3b9b5) |


### 📱 Responsive Design

| Desktop	Tablet |
|:------------------:|
| ![admin-dashboard](https://github.com/sarveshguru/Admin-Dashboard/assets/72163818/8c32f101-5144-49c9-8a62-5ad7f2b7ebb2) |

### 🌐 Live Demo

Check out the live demo: [Admin Dashboard](https://travel-agency158.infinityfreeapp.com)

### 🚀 Getting Started

To get started with the project, follow these steps:

1. **Clone the Project**:
   - Clone the repository from GitHub to your local machine.
     ```bash
     git clone https://github.com/sarveshguru/Travel-Agency-Website.git
     ```

2. **Set Up the Development Environment**:
   - Ensure you have a local server environment set up. You can use XAMPP, WAMP, MAMP, or any other local server software.
   - Start the Apache and MySQL services from your local server control panel (e.g., XAMPP Control Panel).

3. **Move Project to Server Directory**:
   - Move the cloned project folder to the `htdocs` directory (for XAMPP) or the appropriate directory for your local server.
     ```bash
     mv Travel-Agency-Website /path/to/htdocs/
     ```

4. **Create the Database**:
   - Open phpMyAdmin (usually accessible at `http://localhost/phpmyadmin`).
   - Create a new database named `book_db`.
     ```sql
     CREATE DATABASE book_db;
     ```

5. **Create the Required Table**:
   - Select the `book_db` database.
   - Create a table named `book_form` with the following structure:
     ```sql
     CREATE TABLE `book_form` (
         `id` INT NOT NULL AUTO_INCREMENT,
         `name` VARCHAR(255) NOT NULL,
         `email` VARCHAR(255) NOT NULL,
         `phone` VARCHAR(20) NOT NULL,
         `address` VARCHAR(255) NOT NULL,
         `location` VARCHAR(255) NOT NULL,
         `guests` INT NOT NULL,
         `arrivals` DATE NOT NULL,
         `leaving` DATE NOT NULL,
         PRIMARY KEY (`id`)
     );
     ```

6. **Configure Database Connection**:
   - Open the `book_form.php` and `fetch_data.php` files in a text editor.
   - Ensure the database connection details are correct:
     ```php
     $server = "localhost";
     $user = "root";
     $password = "";
     $dbname = "book_db";
     ```

7. **Access the Project in Browser**:
   - Open your web browser and navigate to `http://localhost/Travel-Agency-Website`.

### 🧑‍💻 Author & Contact

- **Author**: [Sarvesh Choudhary](https://github.com/sarveshguru)
- **LinkedIn**: [Sarvesh Choudhary](https://www.linkedin.com/in/your-profile)
- **Portfolio**: [My Portfolio Website](https://sarvesh-choudhary-portfolio.netlify.app)
- **Email**: [E-mail](mailto:csarvesh288@gmail.com)
