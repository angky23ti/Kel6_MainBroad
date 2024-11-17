<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profile - Mohd. Arifin Ramadhan </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #007bff, #6c757d);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            text-align: center;
            padding: 20px;
            width: 100%;
            max-width: 600px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid white;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        p {
            font-size: 1rem;
            margin-bottom: 5px;
        }
        .buttons {
            margin-top: 20px;
        }
        .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            color: white;
            cursor: pointer;
            margin: 0 10px;
            transition: background 0.3s ease;
        }
        .btn-edit {
            background: #007bff;
        }
        .btn-edit:hover {
            background: #0056b3;
        }
        .btn-back {
            background: #6c757d;
        }
        .btn-back:hover {
            background: #5a6268;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img src="images/boyAK.png" alt="Profile-Icon" class="profile-picture">
        <h1> Mohd. Arifin Ramadhan </h1>
        <p><strong>Pekerjaan :</strong> Mahasiswa </p>
        <p><strong>Email :</strong> arifin23ti@mahasiswa.pcr.ac.id </p>
        <p><strong>Domisili :</strong> Pekanbaru, Riau </p>
        <div class="buttons">
            <button class="btn-edit" onclick="editProfile()"> Edit Profil </button>
            <button class="btn-back" onclick="goBack()"> Kembali </button>
        </div>
    </div>

    <script>
        function editProfile() {
            alert("Edit Profil diklik!");
        }

        function goBack() {
            alert("Kembali ke halaman utama!");
        }
    </script>
</body>
</html>
