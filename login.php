<?php
include "db_connection.php";
include "auth_functions.php";
 
session_start();
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
 
    if (loginUser($username, $password)) {
        $_SESSION["username"] = $username;
        header("Location: contacts.php");
        exit();
    } else {
        echo '<p style="color: red;">Login failed.</p>';
    }
}
?>
 
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
 
    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
 
    form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
 
    form input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
    }
 
    form input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
 
<form method="post" action="">
    <h1>Login</h1>
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>
 
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
 
    <input type="submit" value="Login">
</form>