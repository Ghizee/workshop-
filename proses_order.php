<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Detail koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rm_tubagus_raya"; // Sesuaikan nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses form jika disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Query insert data ke tabel orders
    $sql = "INSERT INTO orders (name, address, phone) VALUES ('$name', '$address', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Pesanan Anda berhasil dibuat!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>
<!-- test -->