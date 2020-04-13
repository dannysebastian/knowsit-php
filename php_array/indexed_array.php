<!DOCTYPE html>
<html lang="en">
<head>
    <title>Indexed Array pada PHP</title>
</head>
<body>
    <?php
        /* Kasus: daftar nama mahasiswa 
         * Dengan data: 
         *  [0]: 'Danny Sebastian'
         *  [1]: 'Kristian Adi'
         */

        // Cara Define 1
        $mahasiswa1 = array();

        // Cara Define 2
        $mahasiswa2 = array('Danny Sebastian', 'Kristian Adi', 'Maria Nila');

        // Cara isi value
        $mahasiswa1[0] = 'Danny Sebastian';
        $mahasiswa1[1] = 'Kristian Adi Nugraha';

        // Cara Akses value
        echo $mahasiswa1[0].'<br>';
        echo $mahasiswa1[1].'<br>';

        // Cara Akses Dinamis Menggunakan For
        for($i=0; $i<count($mahasiswa1); $i++){
            echo $mahasiswa1[$i].'<br>';
        }

        // Cara Akses Dinamis Menggunakan Foreach
        foreach($mahasiswa2 as $eachMhs){
            echo $eachMhs.'<br>';
        }
    ?>
</body>
</html>