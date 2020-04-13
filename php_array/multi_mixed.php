<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multi-dimensional Mixed Array pada PHP</title>
</head>
<body>
    <?php
        /* Kasus: Daftar mahasiswa 
         * Dengan data: 
         *  [0]: 
         *      ['nim']:'22074222'
         *      ['nama']:'Danny Sebastian'
         *      ['ipk']:3.00
         *      ['hobi']:
         *         [0]:'Memancing'
         *         [1]:'Keributan'
         *  [1]: 
         *      ['nim']:'12345678'
         *      ['nama']:'Kristian Adi'
         *      ['ipk']:3.10
         *      ['hobi']:
         *         [0]:'Memancing'
         *         [1]:'Kerusuhan'
         */
        $mahasiswa = array();
        $mahasiswa[0] = array(
            'nim' => '22074222',
            'nama' => 'Danny Sebastian',
            'ipk' => '4',
            'hobi' => array('Memancing','Kerusuhan')
        );
        $mahasiswa[1] = array(
            'nim' => '12345678',
            'nama' => 'Kristian Adi',
            'ipk' => '3.99',
            'hobi' => array('Memancing','Keributan')
        );

        // Cara Akses Dinamis Menggunakan Foreach-Foreach
        foreach($mahasiswa as $each){
            foreach($each as $key=>$m){
                if($key != 'hobi')
                    echo $key.':'.$m.'<br>';
                else {
                    foreach($m as $h){
                        echo $h.',';
                    }
                }
            }
            echo '<br>';
        }
    ?>
</body>
</html>