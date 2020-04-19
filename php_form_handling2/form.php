<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP & Database - Form Mahasiswa</title>
</head>
<body>
    <form action="form.php">
        <label for="nim">NIM :</label>
        <input type="text" name="nim"><br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama"><br>
        <label for="jenis_kelamin">Jenis Kelamin :</label>
        <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="P"> Perempuan <br>
        <label for="tgl_lahir">Tanggal Lahir :</label>
        <input type="date" name="tgl_lahir"> <br>
        <label for="tinggi_badan">Tinggi Badan :</label>
        <input type="number" name="tinggi_badan"> <br>
        <label for="email">E-mail :</label>
        <input type="email" name="email"> <br>
        <label for="warna_rambut">Warna Rambut :</label>
        <input type="color" name="warna_rambut"> <br>
        <label for="fakultas">Fakultas :</label>
        <select name="fakultas">
            <option value="11">Fakultas Teknik</option>
            <option value="22">Fakultas Sosial</option>
            <option value="33">Fakultas Ekonomi</option>
        </select><br>
        <label for="deskripsi">Deskripsi Diri:</label>
        <textarea name="deskripsi" cols="30" rows="10"></textarea> <br>
        <label for="hobi">Hobi :</label>
        <input type="checkbox" name="hobi[]" value='memancing'> Memancing
        <input type="checkbox" name="hobi[]" value='memasak'> Memasak
        <input type="checkbox" name="hobi[]" value='menabung'> Menabung <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>