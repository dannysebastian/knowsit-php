<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multi-dimensional Indexed Array pada PHP</title>
</head>
<body>
    <?php
        /* Kasus: Daftar mahasiswa 
         * Dengan data: 
         *  [0]: 
         *      [0]:'22074222'
         *      [1]:'Danny Sebastian'
         *  [1]: 
         *      [0]:'12345678' 
         *      [1]:'Kristian Adi'
         */

        // Cara Define
        $mahasiswa[0][0] = '22074222';
        $mahasiswa[0][1] = 'Danny Sebastian';
        $mahasiswa[1][0] = '12345678';
        $mahasiswa[1][1] = 'Kristian Adi';

        // Cara akses value
        echo $mahasiswa[0][0];

        // Cara Akses Dinamis Menggunakan For-For
        for($i=0; $i<count($mahasiswa); $i++){
            for($j=0; $j<count($mahasiswa[$i]); $j++){
                echo $mahasiswa[$i][$j].'<br>';
            }
        }

        // Cara Akses Dinamis Menggunakan Foreach-Foreach
        foreach($mahasiswa as $mhs){
            foreach($mhs as $m){
                echo $m.'<br>';
            }
        }
    ?>
</body>
</html>