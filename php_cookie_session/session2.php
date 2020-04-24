<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session pada PHP - Halaman 2</title>
</head>
<body>
    <?php
        if(isset($_SESSION['name']))
            echo 'Halo '.$_SESSION['name'];
        else
            echo 'Tidak ada data pada session!';
    ?>
</body>
</html>