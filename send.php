<?php
$sname = "databasetargetlifter.mysql.database.azure.com";
$uname = "databasetargetlifter";
$password = "xN]3PxKgeT9,^NuxN]3PxKgeT9,^Nu";
$db_name = "databasetargetlifter";

// Establishing a connection
$conn = new mysqli($sname, $uname, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have form data to insert
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $company = mysqli_real_escape_string($conn, $_POST["company"]);
    $website = mysqli_real_escape_string($conn, $_POST["website"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO proposal (name, lname, email, phone, company, website, message) VALUES ('$name', '$lname', '$email', '$phone', '$company', '$website', '$message')";

    if ($conn->query($sql) === TRUE) {
        
    echo "Data inserted successfully";
    } else {
        echo "'Data inserted successfully'";

       // echo "" ;
    }
}

// Close the connection
$conn->close();
?>
