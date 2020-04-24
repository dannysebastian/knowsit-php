<?php
    $cookie_name = "profil";
    setcookie($cookie_name, "", mktime() - 3600, "/"); //cookies akan dioverride expire nya menjadi 1 jam kebelakang
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cookie pada PHP</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie tidak ditemukan!";
        } else {
            echo '$_COOKIE['.$cookie_name.'] = '.$_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>