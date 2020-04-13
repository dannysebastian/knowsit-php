<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan pada PHP</title>
</head>
<body>
    <?php
        $nilai = 60;
        if($nilai >= 85){
            echo '<strong>A</strong>';
        } else if($nilai >= 75 && $nilai < 85) {
            echo '<Strong>B</strong>';
        } else if($nilai >= 65 && $nilai < 75){
            echo '<strong>C</strong>';
        } else {
            echo '<strong>D</strong>';
        }

        $gender = 'O';
        switch($gender){
            case 'L': echo 'Laki-laki'; break;
            case 'P': echo 'Perempuan'; break;
            default: echo 'Gender tidak dikenal'; break;
        }
    ?>
</body>
</html>