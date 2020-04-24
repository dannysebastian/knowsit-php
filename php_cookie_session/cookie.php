<?php
    $cookie_name = "profil";
    $cookie_value = "Danny Sebastian";
    setcookie($cookie_name, $cookie_value, mktime() + 60*60*24, "/"); //cookies akan aktif selama 1 hari
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