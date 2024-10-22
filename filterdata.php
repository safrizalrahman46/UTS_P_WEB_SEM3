<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

$error_message = "";
$data = [];
$filtered_data = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['data'])) {
        $error_message = "Silakan masukkan data.";
    } else {
        $data = array_map('trim', explode(',', $_POST['data']));
        
        // Filtering logic based on input
        if (!empty($_POST['filter'])) {
            $filter = trim($_POST['filter']);
            $filtered_data = array_filter($data, function($item) use ($filter) {
                return strpos($item, $filter) !== false;
            });
        } else {
            $filtered_data = $data; // No filter applied
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Filter Data</title>
</head>
<body>
<div class="container">
    <h2>Filter Data</h2>
    <form method="post" action="">
        <label>Masukkan Data (pisahkan dengan koma):</label>
        <input type="text" name="data" placeholder="Contoh: Apel, Jeruk, Pisang"><br>
        
        <label>Filter Data:</label>
        <input type="text" name="filter" placeholder="Kata kunci untuk filter"><br>
        
        <input type="submit" value="Filter Data">
        <div class="error"><?php echo $error_message; ?></div>
    </form>

    <?php if (!empty($filtered_data)) {
        echo "<h3>Data yang difilter:</h3>";
        echo "<ul>";
        foreach ($filtered_data as $item) {
            echo "<li>" . htmlspecialchars($item) . "</li>";
        }
        echo "</ul>";
    } ?>

<div class="back-button">
    <a href="home.php">Kembali ke Home</a>
</div>

</div>
</body>
</html>
