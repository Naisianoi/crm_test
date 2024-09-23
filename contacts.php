<?php
include "db_connection.php";
 
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
 
$username = $_SESSION["username"];
 
// Fetch contacts from the database
$result = $conn->query("SELECT * FROM contacts");
 
// Inline styles for a simple table
echo '<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
 
    h1, h2 {
        color: #333;
    }
 
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
 
    table, th, td {
        border: 1px solid #ddd;
    }
 
    th, td {
        padding: 12px;
        text-align: left;
    }
 
    th {
        background-color: #4caf50;
        color: #fff;
    }
 
    a {
        color: #007bff;
        text-decoration: none;
    }
 
    a:hover {
        text-decoration: underline;
    }
</style>';
 
// Display contacts in a table
echo "<h1>Welcome, " . $username . "!</h1>";
echo "<h2>Your Contacts:</h2>";
echo "<table>";
echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Company</th>
            <th>Created At</th>
        </tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row["id"]}</td>
            <td>{$row["name"]}</td>
            <td>{$row["email"]}</td>
            <td>{$row["phone"]}</td>
            <td>{$row["company"]}</td>
            <td>{$row["created_at"]}</td>
        </tr>";
}
echo "</table>";
 
?>