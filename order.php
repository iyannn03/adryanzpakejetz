<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $menu_item = $_POST['menu_item'];
    $quantity = $_POST['quantity'];
    $address = htmlspecialchars($_POST['address']);

    $conn = new mysqli("localhost", "username", "password", "coffeeshop_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO orders (name, email, menu_item, quantity, address) VALUES ('$name', '$email', '$menu_item', '$quantity', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Your order has been placed!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>