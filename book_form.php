<?php

$server = "localhost";
$user = "root";
$password = "";
$dbrame = "book_db";


    $connection = mysqli_connect($server,$user,$password,$dbrame);

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = "INSERT INTO `book_form` (`name`,`email`,`phone`,`address`,`location`,`guests`,`arrivals`,`leaving`)VALUES('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

        // mysqli_query($connection, $request);

        if (mysqli_query($connection, $request)) {
            header('location:book.php?success=1');
        } else {
            echo "Error: " . mysqli_error($connection);
        }

    }
    else{
        echo 'something went wrong try again';
    }
