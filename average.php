<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

$error_message = "";
$rata_rata = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nilai'])) {
        $error_message = "Silakan masukkan nilai.";
    } else {
        $nilai = $_POST['nilai'];
        $rata_rata = array_sum($nilai) / count($nilai);
        echo "<script>Swal.fire('Rata-rata dihitung!', 'Rata-rata nilai adalah: " . $rata_rata . "', 'success');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Form Rata-Rata Nilai</title>
</head>
<body>
<div class="container">
    <h2>Form Rata-Rata Nilai</h2>
    <form method="post" action="">
        <input type="text" name="nilai[]" placeholder="Masukkan nilai 1"><br>
        <input type="text" name="nilai[]" placeholder="Masukkan nilai 2"><br>
        <input type="text" name="nilai[]" placeholder="Masukkan nilai 3"><br>
        <input type="submit" name="hitung" value="Hitung Rata-Rata">
        <script>
            <?php if ($error_message): ?>
                Swal.fire('Error!', '<?php echo $error_message; ?>', 'error');
            <?php endif; ?>
        </script>
    </form>

    <div class="back-button">
        <a href="home.php">Kembali ke Home</a>
    </div>
</div>
</body>
</html>
