<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tipe Data pada PHP</title>
</head>
<body>
    <?php
        // String
        $name = 'Danny Sebastian';
        $name = "Danny Sebastian";

        // Integer
        $usia = 30;
        $nilai = 85;

        // Float
        $usia = 30.5;
        $nilai = 8.5;

        // Boolean
        $x = true;
        $y = false;

        // Array
        $cars = array('honda', 'toyota', 'suzuki');
        echo $cars[0];
        $cars[0] = 'Mitsubishi';
        echo $cars[0];

        // null
        $x = null;
    ?>
</body>
</html>