<?php
include 'function.php';
session_start();

if (isset($_POST['login'])) {
    if (login($_POST)) {
        echo "<script>
            alert('Anda berhasil login');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Anda gagal login');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            padding: 70px;
            padding-top: 10px;
            padding-bottom: 50px;
            max-width: 400px;
            max-height: 500px;
            margin: 0 auto;
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
            background-color: #007BFF;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required placeholder="Username">
                </li>
                <li>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required placeholder="Password">
                </li>
                <li>
                    <button type="submit" name="login">Login</button>
                </li>
            </ul>
            <p>Belum punya akun? <a href="daftar.php">Daftar</a></p>
        </form>
    </div>
</body>

</html>