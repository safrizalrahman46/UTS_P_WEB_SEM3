<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Welcome to Universitas Pelita Harapan</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            background: #333;
            color: white;
            width: 250px;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
        }

        .sidebar h2 {
            color: white;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background: #575757;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .header {
            background: #007BFF;
            color: white;
            padding: 15px;
            text-align: center;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .button {
            background-color: #007BFF;
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            flex: 1;
            min-width: 150px;
            transition: background 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .logout-button {
            background-color: red;
        }

        .logout-button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Admin Menu</h2>
            <a href="average.php">Hitung Rata-Rata Nilai</a>
            <a href="leap-year.php">Cek Tahun Kabisat</a>
            <a href="ranking.php">Cek Ranking Nilai</a>
            <a href="color.php">Pilih Warna Favorit</a>
            <a href="grade.php">Cek Predikat Nilai</a>
            <div class="logout">
                <a href="logout.php" class="button logout-button">Logout</a>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <h2>Welcome to POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="button-container">
                <a href="average.php" class="button">Hitung Rata-Rata Nilai</a>
                <a href="leap-year.php" class="button">Cek Tahun Kabisat</a>
                <a href="ranking.php" class="button">Cek Ranking Nilai</a>
                <a href="color.php" class="button">Pilih Warna Favorit</a>
                <a href="grade.php" class="button">Cek Predikat Nilai</a>
            </div>
        </div>
    </div>
</body>
</html>
