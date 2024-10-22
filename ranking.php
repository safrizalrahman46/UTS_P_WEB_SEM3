<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

$error_message = "";
$result_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'] ?? [];
    if (empty($nilai) || count(array_filter($nilai)) === 0) {
        $error_message = "Silakan masukkan setidaknya satu nilai.";
    } else {
        $max_value = max($nilai);
        $min_value = min($nilai);
        $result_message = "Nilai Tertinggi: $max_value<br>Nilai Terendah: $min_value";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Form Ranking Nilai</title>
</head>
<body>
<div class="container">
    <h2>Form Ranking Nilai</h2>
    <form method="post" action="">
        <input type="text" name="nilai[]" placeholder="Masukkan nilai 1"><br>
        <input type="text" name="nilai[]" placeholder="Masukkan nilai 2"><br>
        <input type="text" name="nilai[]" placeholder="Masukkan nilai 3"><br>
        <input type="submit" name="ranking" value="Cek Ranking">
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
