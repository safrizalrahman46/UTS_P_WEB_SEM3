<?php
session_start();
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) && empty($password)) {
        $error_message = "Username dan password harus diisi.";
    } elseif (empty($username)) {
        $error_message = "Username harus diisi.";
    } elseif (empty($password)) {
        $error_message = "Password harus diisi.";
    } elseif ($username == "2341760151" && $password == "2341760151") {
        $_SESSION['loggedin'] = true;
        // Use a variable to control SweetAlert for successful login
        $success_message = "Login Berhasil!";
    } else {
        $error_message = "Login Gagal! Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login Page</title>
</head>
<body>
<div class="container">
    <div class="image-container">
        <img src="assets/logo.jpg" alt="Logo" class="logo">
    </div>
    <h2>Login Page</h2>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
    <script>
        <?php if ($error_message): ?>
            Swal.fire('Error!', '<?php echo $error_message; ?>', 'error');
        <?php elseif (isset($success_message)): ?>
            Swal.fire('Success!', '<?php echo $success_message; ?>', 'success').then(() => {
                window.location.href = 'home.php'; // Redirect after alert
            });
        <?php endif; ?>
    </script>
</div>
</body>
</html>
