<?php
// booking.php
// 1) Connect to MySQL server (no DB yet)
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// 2) Create DB if not exists, then select it
if (!mysqli_query($con, "CREATE DATABASE IF NOT EXISTS travel")) {
    die("Error creating database: " . mysqli_error($con));
}
if (!mysqli_select_db($con, "travel")) {
    die("Error selecting database: " . mysqli_error($con));
}

// 3) Create table if not exists
$tableSql = "
CREATE TABLE IF NOT EXISTS Booking_details (
    userID INT NOT NULL AUTO_INCREMENT,
    fname VARCHAR(30),
    lname VARCHAR(30),
    email VARCHAR(30),
    phone_num VARCHAR(15),
    destination VARCHAR(20),
    address VARCHAR(50),
    tickets INT,
    arrival DATE,
    `leaving` DATE,
    PRIMARY KEY (userID)
)";
if (!mysqli_query($con, $tableSql)) {
    die("Error creating table: " . mysqli_error($con));
}

// 4) Read POST fields (ensure your form uses method='POST' and matching name="")
$fname       = $_POST['fname']       ?? '';
$lname       = $_POST['lname']       ?? '';
$email       = $_POST['email']       ?? '';
$phone_num   = $_POST['phone_num']   ?? '';
$address     = $_POST['address']     ?? '';
$destination = $_POST['destination'] ?? '';
$tickets     = (int)($_POST['tickets'] ?? 0);
$arrival     = $_POST['arrival']     ?? '';
$leaving     = $_POST['leaving']     ?? '';

// 5) Insert with prepared statement
$sql = "INSERT INTO Booking_details
        (fname, lname, email, phone_num, address, destination, tickets, arrival, `leaving`)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($con, $sql);
if (!$stmt) {
    die("Prepare failed: " . mysqli_error($con));
}

// types: s=string, i=int  -> tickets is int
mysqli_stmt_bind_param($stmt, "ssssssiss",
    $fname, $lname, $email, $phone_num, $address, $destination, $tickets, $arrival, $leaving
);

if (mysqli_stmt_execute($stmt)) {
    // Success: redirect or show message
    echo "<script>alert('Booking placed successfully'); window.location.href='book.php';</script>";
} else {
    echo "Insert error: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($con);
