<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $reservation_time = $_POST['reservation_time'];

    // Koneksi ke database
    $conn = new mysqli("localhost", "username", "password", "coffeeshop_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Masukkan data ke dalam tabel reservasi
    $sql = "INSERT INTO reservations (name, email, reservation_time) VALUES ('$name', '$email', '$reservation_time')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Reservation successful! We'll see you soon.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>