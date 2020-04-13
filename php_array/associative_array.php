<!DOCTYPE html>
<html lang="en">
<head>
    <title>Associative Array pada PHP</title>
</head>
<body>
    <?php
        /* Kasus: mahasiswa 
         * Dengan data: 
         *  ['nim']:'22074222'
         *  ['nama']:'Danny Sebastian'
         */

        // Cara Define 1
        $mahasiswa1 = array();
        $mahasiswa1['nim'] = '22074222';
        $mahasiswa1['nama'] = 'Danny Sebastian';

        // Cara Define 2
        $mahasiswa2 = array('nim'=>'12345678', 'nama'=>'Kristian Adi');

        // Cara isi value
        $mahasiswa1['ipk'] = 4.0;

        // Cara Akses value
        echo $mahasiswa1['nim'].' '.$mahasiswa1['nama'].' '.$mahasiswa1['ipk'].'<br>';

        // Cara Akses Dinamis Menggunakan Foreach
        foreach($mahasiswa2 as $key => $each){
            echo $key.' => '.$each.'<br>';
        }
    ?>
</body>
</html>