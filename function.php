<?php
$conn = mysqli_connect("localhost", "root", "", "project_web");


function register($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    if ($password !== $password2) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
                document.location.href = 'daftar.php';
            </script>";
        return false;
    }

    // Gunakan password_hash untuk keamanan yang lebih baik
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function login($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }
    return false;
}
