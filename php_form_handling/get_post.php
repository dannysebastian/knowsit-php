<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET method vs POST method</title>
</head>
<body>
    <?php
        if($_POST){
            echo 'POST METHOD: <br>';
            print_r($_POST);
        }
        if($_GET){
            echo 'GET METHOD: <br>';
            print_r($_GET);
        }
    ?>
    POST Method: <br>
    <form action="get_post.php" method="POST">
        <label for="usernamePost">Username :</label><input type="text" name="usernamePost" value="12345"><br>
        <label for="passwordPost">Password :</label><input type="password" name="passwordPost" ><br>
        <input type="submit" value="kirim POST">
    </form>
    GET Method: <br>
    <form action="get_post.php" method="GET">
        <label for="usernameGet">Username :</label><input type="text" name="usernameGet"><br>
        <label for="passwordGet">Password :</label><input type="password" name="passwordGet"><br>
        <input type="submit" value="kirim GET">
    </form>
</body>
</html>