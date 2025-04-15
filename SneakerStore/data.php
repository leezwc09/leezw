<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sneakerstore";

    $conn = new mysqli($servername,$username,$password,$database);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $phone = $_post['phone'];
    $address = $_post['address'];
    $card_number = $_post['card_number'];
    $expiry_month = $_post['expiry_month'];
    $expiry_year = $_post['expiry_year'];
    $cvv = $_post['cvv'];

    // Insert data into database
    $sql = "INSERT INTO payments(name,phone,card_number,expiry_number,expiry_month,expiry_year,cvv)
    VALUES ('$name','$phone','$address','$card_number','$expiry_month','$expiry_year','$cvv')";

    if($conn->query($sql) === TRUE){

        echo "<script>alert('Checkout complete');</srcipt>";

        echo "<script>window.setTimeout(function(){window.location.href = 'index.html';}, 1000);</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
