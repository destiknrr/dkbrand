<?php
$host = "localhost";
$user = "root";  // Sesuaikan dengan username database kamu
$password = "";  // Sesuaikan dengan password database kamu
$database = "form_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
