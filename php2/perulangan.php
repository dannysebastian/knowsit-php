<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perulangan pada PHP</title>
</head>
<body>
    <?php
        for($i=0; $i<5; $i++){
            echo '$i = '.$i.'<br>';
        }

        while($i<10){
            echo '$i = '.$i.'<br>';
            $i++;
        }

        $i=0;
        do {
            echo '$i = '.$i.'<br>';
            $i++;
        } while($i<5);

        $cars = array('honda', 'toyota', 'mitsubishi');
        foreach($cars as $car){
            echo $car.'<br>';
        }
    ?>
</body>
</html>