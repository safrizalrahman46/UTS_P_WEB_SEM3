<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

$error_message = "";
$warna = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['warna'])) {
        $error_message = "Silakan pilih warna.";
    } else {
        $warna = $_POST['warna'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Form Pemilihan Warna</title>
</head>
<body>
<div class="container">
    <h2>Pilih Warna Favorit Anda</h2>
    <form method="post" action="">
        <input type="color" name="warna"><br>
        <input type="submit" name="pilih_warna" value="Submit">
    </form>

    <script>
        <?php if ($error_message): ?>
            Swal.fire('Error!', '<?php echo $error_message; ?>', 'error');
        <?php elseif ($warna): ?>
            Swal.fire('Hasil!', 'Anda menyukai warna: <?php echo $warna; ?>', 'success');
        <?php endif; ?>
    </script>

    <div class="back-button">
        <a href="home.php">Kembali ke Home</a>
    </div>
</div>
</body>
</html>
