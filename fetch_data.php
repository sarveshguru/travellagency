<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "book_db";

$connection = mysqli_connect($server, $user, $password, $dbname);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Query to fetch data from the database
$query = "SELECT * FROM book_form";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- fon awesome  cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- external css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- header section start -->

    <section class="header">

        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- table data  -->
    <h1>Book Form Data</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Location</th>
            <th>Guests</th>
            <th>Arrivals</th>
            <th>Leaving</th>
        </tr>
        <?php
        // Loop through the result and display each row in the table
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['location'] . "</td>";
            echo "<td>" . $row['guests'] . "</td>";
            echo "<td>" . $row['arrivals'] . "</td>";
            echo "<td>" . $row['leaving'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    // Close the database connection and free the result
    mysqli_free_result($result);
    mysqli_close($connection);
    ?>


 <!-- footer section start -->
 <section class="footer">
        <section class="foot">
            <div class="box-container">
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
                </div>

                <div class="box">
                    <h3>Extra Links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                    <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
                </div>

                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i> +123-456-7897</a>
                    <a href="#"><i class="fas fa-phone"></i> +123-456-7897</a>
                    <a href="#"><i class="fas fa-envelope"></i> csarvesh288@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i> Bhopal, India </a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                    <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
                </div>

            </div>

            <div class="credit">created by <span>Sarvesh choudhary</span> | all right reserved! </div>
        </section>
    </section>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- external js file link -->
    <script src="js/script.js"></script>


</body>

</html>