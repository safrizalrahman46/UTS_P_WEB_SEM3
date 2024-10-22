<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

$error_message = "";
$predikat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'] ?? '';
    if (empty($nilai)) {
        $error_message = "Silakan masukkan nilai.";
    } elseif (!is_numeric($nilai)) {
        $error_message = "Nilai harus berupa angka.";
    } else {
        if ($nilai >= 90) {
            $predikat = "A";
        } elseif ($nilai >= 80) {
            $predikat = "B";
        } elseif ($nilai >= 70) {
            $predikat = "C";
        } elseif ($nilai >= 60) {
            $predikat = "D";
        } else {
            $predikat = "F";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Form Predikat Nilai</title>
</head>
<body>
<div class="container">
    <h2>Form Predikat Nilai</h2>
    <form method="post" action="">
        <label>Masukkan Nilai:</label> 
        <input type="text" name="nilai"><br>
        <input type="submit" name="predikat" value="Cek Predikat">
    </form>

    <script>
        <?php if ($error_message): ?>
            Swal.fire('Error!', '<?php echo $error_message; ?>', 'error');
        <?php elseif ($predikat): ?>
            Swal.fire('Hasil!', 'Predikat: <?php echo $predikat; ?>', 'success');
        <?php endif; ?>
    </script>

    <div class="back-button">
        <a href="home.php">Kembali ke Home</a>
    </div>
</div>
</body>
</html>
