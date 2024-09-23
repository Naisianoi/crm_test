<?php
function registerUser($username, $password)
{
    global $conn;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$hashedPassword')";
    return $conn->query($sql);
}
 
function loginUser($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
 
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            return true;
        }
    }
 
    return false;
}
 
?>