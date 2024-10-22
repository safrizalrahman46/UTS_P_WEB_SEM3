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
            overflow: hidden;
            font-family: Arial, sans-serif;
            animation: moveBackground 10s linear infinite;
        }

        @keyframes moveBackground {
            0% {
                background-position: 100% 0;
            }
            100% {
                background-position: 0 0;
            }
        }

        .container {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
            padding: 50px;
        }

        /* Change heading color to black */
        h2 {
            color: black;
        }

        .button-container {
            margin: 20px 0;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: rgba(0, 0, 0, 0.9);
        }

        .logout {
            margin-top: 20px;
        }

        .logout-button {
            background-color: red;
        }

        .logout-button:hover {
            background-color: darkred;
        }

        /* Background gradient */
        body {
            background: linear-gradient(270deg, #4A90E2, #50E3C2);
            background-size: 200% 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Welcome to POLITEKNIK NEGERI MALANG</h2>
    
    <div class="button-container">
        <a href="average.php" class="button">Hitung Rata-Rata Nilai</a>
        <a href="leap-year.php" class="button">Cek Tahun Kabisat</a>
        <a href="ranking.php" class="button">Cek Ranking Nilai</a>
        <a href="color.php" class="button">Pilih Warna Favorit</a>
        <a href="grade.php" class="button">Cek Predikat Nilai</a>
    </div>

    <div class="logout">
        <a href="logout.php" class="button logout-button">Logout</a>
    </div>
</div>
</body>
</html>
