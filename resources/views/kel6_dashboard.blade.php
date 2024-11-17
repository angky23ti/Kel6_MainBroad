<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 6 - MainBroad</title>
    <style>
        /* CSS untuk gaya halaman */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .dashboard {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .dashboard img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
        }
        .buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        button:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <img src="images/home.png" alt="Logo">
        <h1>Developer</h1>
        <div class="buttons">
            <button id="button1">Angky</button>
            <button id="button2">Aziz</button>
            <button id="button3">Arifin</button></button>
            <button id="button4">Sessy</button>
        </div>
    </div>
    <script>
        // JavaScript untuk mengatur navigasi tombol
        document.getElementById('button1').addEventListener('click', function() {
            window.location.href = '/angky';
        });
        document.getElementById('button2').addEventListener('click', function() {
            window.location.href = '/aziz';
        });
        document.getElementById('button3').addEventListener('click', function() {
            window.location.href = '/arifin';
        });
        document.getElementById('button4').addEventListener('click', function() {
            window.location.href = '/sessy';
        });
    </script>
</body>
</html>
