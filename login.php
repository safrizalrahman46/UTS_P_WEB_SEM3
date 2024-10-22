<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "2341760151" && $password == "2341760151") {
        echo "Login Berhasil!";
    } else {
        echo "Login Gagal!";
    }
}
?>
<form method="post" action="">
    <label>Username:</label> 
    <input type="text" name="username"><br>
    <label>Password:</label> 
    <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
