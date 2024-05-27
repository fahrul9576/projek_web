<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<html>

<body>
    <button><a href="logout.php">Logout</a></button>
</body>

</html>