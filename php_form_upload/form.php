<?php
    $tartgetDir = "upload/";
    if($_POST){
        $isValid = true;

        //File size <= 500Kb 
        if($_FILES['gambar']['size'] > 500000){
            $isValid = false;
            echo "Gambar Melebihi 500KB.";
        }

        //tipe file jpg, png, gif
        $fileType = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
        if($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png' && $fileType != 'gif'){
            $isValid = false;
            echo "File yang diupload bukan gambar.";
        }

        if($isValid){
            if(move_uploaded_file($_FILES['gambar']['tmp_name'], $tartgetDir.$_FILES['gambar']['name'])){
                echo "Gambar berhasil di upload";
            } else {
                echo "Gambar gagal di upload";
            }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>File Upload Menggunakan PHP - Penyimpanan File</title>
</head>

<body>
    <form action="form.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="gambar">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>

</html>