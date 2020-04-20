<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP & Database - Form Mahasiswa</title>
</head>

<body>
    <table>
        <tr>
            <td><label for="nim">NIM :</label></td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td><label for="nama">Nama :</label></td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td><label for="jenis_kelamin">Jenis Kelamin :</label></td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L"> Laki-laki <br>
                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
            </td>
        </tr>
        <tr>
            <td><label for="tgl_lahir">Tanggal Lahir :</label></td>
            <td><input type="date" name="tgl_lahir"></td>
        </tr>
        <tr>
            <td><label for="tinggi_badan">Tinggi Badan :</label></td>
            <td><input type="number" name="tinggi_badan"></td>
        </tr>
        <tr>
            <td><label for="email">E-mail :</label></td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td><label for="warna">Warna Rambut :</label></td>
            <td><input type="color" name="warna_rambut"></td>
        </tr>
        <tr>
            <td><label for="fakultas">Fakultas :</label></td>
            <td>
                <select name="fakultas">
                    <option value="11">Fakultas Teknik</option>
                    <option value="22">Fakultas Sosial</option>
                    <option value="33">Fakultas Ekonomi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="deskripsi">Deskripsi Diri:</label></td>
            <td><textarea name="deskripsi" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><label for="hobi">Hobi :</label></td>
            <td>
                <input type="checkbox" name="hobi[]" value='memancing'> Memancing <br>
                <input type="checkbox" name="hobi[]" value='memasak'> Memasak <br>
                <input type="checkbox" name="hobi[]" value='menabung'> Menabung
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="reset" value="Kosongkan Form">
                <input type="submit" value="Simpan">
            </td>
        </tr>
    </table>
</body>

</html>