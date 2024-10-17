<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $review = htmlspecialchars($_POST['review']);
    $rating = $_POST['rating'];

    $conn = new mysqli("localhost", "username", "password", "coffeeshop_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO reviews (name, review, rating) VALUES ('$name', '$review', '$rating')";

    if ($conn->query($sql) === TRUE) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>