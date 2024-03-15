<?php
// Established a connection
$mydb = mysql.connector.connect(
  host="databasetargetlifter.mysql.database.azure.com",
  user="databasetargetlifter",
  password="xN]3PxKgeT9,^NuxN]3PxKgeT9,^Nu",
  database="databasetargetlifter"
);

// Check connection
if (!$mydb) {
    die("Connection failed: " . mysqli_connect_error());
}

// Assuming you have form data to insert
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $website = $_POST["website"];
    $message = $_POST["message"];

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO proposal (name, lname, email, phone, company, website, message) VALUES ('$name', '$lname', '$email', '$phone', '$company', '$website', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Data inserted successfully: " . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);
?>
