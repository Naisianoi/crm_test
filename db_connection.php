// db_connection.php
<?php
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "crm_test_db";
 
$conn = new mysqli($host, $username, $password, $database);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>