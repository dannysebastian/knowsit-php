<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multi-dimensional Associative Array pada PHP</title>
</head>
<body>
    <?php
        /* Kasus: Daftar mahasiswa 
         * Dengan data: 
         *  ['22074222']: 
         *          ['nama']:'Danny Sebastian'
         *          ['ipk']:3.00
         *  ['12345678']: 
         *          ['nama']:'Kristian Adi'
         *          ['ipk']:3.10
         */

        // Cara Define
        $mahasiswa = array();
        $mahasiswa['22074222'] = array();
        $mahasiswa['22074222']['nama'] = 'Danny Sebastian';
        $mahasiswa['22074222']['ipk'] = 4.0;

        // Cara akses value
        echo $mahasiswa['22074222']['ipk'].'<br>';

        // Cara Akses Dinamis Menggunakan Foreach-Foreach
        foreach($mahasiswa as $nim => $mhs){
            echo $nim.'<br>';
            foreach($mhs as $m){
                echo $m.'<br>';
            }
        }
        
    ?>
</body>
</html>