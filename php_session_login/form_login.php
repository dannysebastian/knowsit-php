<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contoh Login Simple menggunakan PHP - Halaman Form Login</title>
</head>

<body>
    <a href="form_login.php">Form Login</a> | <a href="logout.php">Logout</a> | <a href="access.php">Tes Akses</a>
    <form action="form_login.php" method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username"> <br>
        <label for="password">Password :</label>
        <input type="password" name="password"> <br>
        <input type="submit" value="Login" >
    </form>
</body>

</html>