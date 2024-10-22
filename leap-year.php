<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

$error_message = "";
$result_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tahun = $_POST['tahun'] ?? '';
    if (empty($tahun)) {
        $error_message = "Silakan masukkan tahun.";
    } elseif (is_numeric($tahun)) {
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            $result_message = "$tahun adalah tahun kabisat.";
        } else {
            $result_message = "$tahun bukan tahun kabisat.";
        }
    } else {
        $error_message = "Tahun harus berupa angka.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Form Tahun Kabisat</title>
</head>
<body>
<div class="container">
    <h2>Form Tahun Kabisat</h2>
    <form method="post" action="">
        <label>Masukkan Tahun:</label> 
        <input type="text" name="tahun"><br>
        <input type="submit" value="Cek Tahun">
    </form>
    
    <script>
        <?php if ($error_message): ?>
            Swal.fire('Error!', '<?php echo $error_message; ?>', 'error');
        <?php elseif ($result_message): ?>
            Swal.fire('Hasil!', '<?php echo $result_message; ?>', 'success');
        <?php endif; ?>
    </script>

    <div class="back-button">
        <a href="home.php">Kembali ke Home</a>
    </div>
</div>
</body>
</html>
