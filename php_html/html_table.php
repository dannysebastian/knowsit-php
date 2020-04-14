<!DOCTYPE html>
<html lang="en">

<head>
    <title>Populate Table Data</title>
</head>

<body>
    <?php
    const JENIS_KELAMIN  = array(
        'L' => 'Laki-laki',
        'P' => 'Perempuan'
    );

    // lebih dari sama dengan key
    const PREDIKAT  = array(
        '3.5' => 'Sangat Baik',
        '3' => 'Baik',
        '2' => 'Cukup',
        '1.5' => 'Kurang Baik',
        '0' => 'Tidak Baik'
    );

    $listMahasiswa = array(
        array(
            'nim' => '22070001',
            'nama' => 'Alfa',
            'jenis_kelamin' => 'P',
            'alamat'  => 'DIY',
            'no_telepon' => '0812345678',
            'ipk' => 3.75,
            'hobi' => array('belajar', 'bermain', 'menabung')
        ),
        array(
            'nim' => '22070002',
            'nama' => 'Beta',
            'jenis_kelamin' => 'L',
            'alamat'  => 'Yogyakarta',
            'no_telepon' => '0812387654',
            'ipk' => 3.22,
            'hobi' => array('bermain', 'berlari', 'berdagang', 'membaca')
        ),
        array(
            'nim' => '22070003',
            'nama' => 'Charli',
            'jenis_kelamin' => 'L',
            'alamat'  => 'Bantul',
            'no_telepon' => '0808080808',
            'ipk' => 1.55,
            'hobi' => array('berburu', 'meramu')
        ),
        array(
            'nim' => '22070004',
            'nama' => 'Desi',
            'jenis_kelamin' => 'P',
            'alamat'  => 'Sleman',
            'no_telepon' => '0897987987',
            'ipk' => 2.67,
            'hobi' => array('bermain', 'berlari', 'berladang', 'berjualan')
        ),
        array(
            'nim' => '22070005',
            'nama' => 'Eko',
            'jenis_kelamin' => 'L',
            'alamat'  => 'Gunung Kidul',
            'no_telepon' => '0856785678',
            'ipk' => 3.9,
            'hobi' => array('berjemur')
        ),
    );
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>IPK</th>
                <th>Predikat</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>22070001</td>
                <td>Alfa</td>
                <td>Perempuan</td>
                <td>DIY</td>
                <td>0812345678</td>
                <td>3.75</td>
                <td>
                    Sangat Baik </td>
                <td>
                    <ul>
                        <li>belajar</li>
                        <li>bermain</li>
                        <li>menabung</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>22070002</td>
                <td>Beta</td>
                <td>Laki-laki</td>
                <td>Yogyakarta</td>
                <td>0812387654</td>
                <td>3.22</td>
                <td>
                    Baik </td>
                <td>
                    <ul>
                        <li>bermain</li>
                        <li>berlari</li>
                        <li>berdagang</li>
                        <li>membaca</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>22070003</td>
                <td>Charli</td>
                <td>Laki-laki</td>
                <td>Bantul</td>
                <td>0808080808</td>
                <td>1.55</td>
                <td>
                    Kurang Baik </td>
                <td>
                    <ul>
                        <li>berburu</li>
                        <li>meramu</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>22070004</td>
                <td>Desi</td>
                <td>Perempuan</td>
                <td>Sleman</td>
                <td>0897987987</td>
                <td>2.67</td>
                <td>
                    Cukup </td>
                <td>
                    <ul>
                        <li>bermain</li>
                        <li>berlari</li>
                        <li>berladang</li>
                        <li>berjualan</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>22070005</td>
                <td>Eko</td>
                <td>Laki-laki</td>
                <td>Gunung Kidul</td>
                <td>0856785678</td>
                <td>3.9</td>
                <td>
                    Sangat Baik </td>
                <td>
                    <ul>
                        <li>berjemur</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>