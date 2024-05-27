<?php
include 'function.php';

if (isset($_POST['register'])) {
    if (register($_POST) > 0) {
        echo "<script>
            alert('User baru berhasil ditambahkan');
            document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
            alert('User gagal ditambahkan');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 60px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form ul {
            list-style: none;
            padding: 0;
        }

        form li {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Daftar Dulu Kawan</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                </li>
            </ul>
            <ul>
                <li>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </li>
            </ul>
            <ul>
                <li>
                    <label for="password2">Konfirmasi Password:</label>
                    <input type="password" name="password2" id="password2" required>
                </li>
            </ul>
            <button type="submit" name="register">Daftar</button>
            <p>Sudah punya akun? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>

</html>