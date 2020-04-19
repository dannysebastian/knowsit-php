<!DOCTYPE html>
<html lang="en">

<head>
    <title>HTML Form & Input Type & PHP Handling</title>
</head>

<body>
    <form action="html_form.php" method="POST">
        <table>
            <thead>
                <th>Input Type</th>
                <th>Hasil</th>
                <th>Output PHP</th>
            </thead>
            <tbody>
                <tr>
                    <td>type="text"</td>
                    <td><input type="text" name="text"></td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['text'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="color"</td>
                    <td><input type="color" name="color"></td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['color'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="radio"</td>
                    <td>
                        <input type="radio" name="radio" value="A1">A1
                        <input type="radio" name="radio" value="A2">A2
                        <input type="radio" name="radio2" value="B1">B1
                        <input type="radio" name="radio2" value="B2">B2
                    </td>
                    <td>
                    <?php if ($_POST && $_POST['radio']) {
                            echo $_POST['radio'] . '<br>';
                        } ?>
                        <?php if ($_POST && $_POST['radio2']) {
                            echo $_POST['radio2'] . '<br>';
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="checkbox"</td>
                    <td>
                        <input type="checkbox" name="checkbox[]" value="A">A
                        <input type="checkbox" name="checkbox[]" value="B">B
                        <input type="checkbox" name="checkbox[]" value="C">C
                        <input type="checkbox" name="checkbox[]" value="D">D
                    </td>
                    <td>
                        <?php if ($_POST) {
                            foreach ($_POST['checkbox'] as $chk)
                                echo $chk . "<br>";
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="email"</td>
                    <td>
                        <input type="email" name="email">
                    </td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['email'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="number"</td>
                    <td>
                        <input type="number" name="number">
                    </td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['number'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="date"</td>
                    <td>
                        <input type="date" name="date">
                    </td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['date'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="time"</td>
                    <td>
                        <input type="time" name="time">
                    </td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['time'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="time"</td>
                    <td>
                        <input type="month" name="month">
                    </td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['month'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="password"</td>
                    <td>
                        <input type="password" name="password">
                    </td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['password'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>textarea</td>
                    <td>
                        <textarea name="textarea"  cols="30" rows="10"></textarea>
                    </td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['textarea'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>select</td>
                    <td>
                        <select name="select">
                            <option value="1">Satu</option>
                            <option value="2">Dua</option>
                            <option value="3">Tiga</option>
                        </select>
                    </td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['textarea'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="hidden"</td>
                    <td>
                        <input type="hidden" name="hidden" value="vhidden">
                    </td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['hidden'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="reset"</td>
                    <td>
                        <input type="reset" name="reset" value="vreset">
                    </td>
                    <td>
                        <?php if ($_POST) {
                            echo $_POST['reset'];
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>type="submit"</td>
                    <td><input type="submit" name="submit" value="vsubmit"></td>
                    <td><?php if ($_POST) {
                            echo $_POST['submit'];
                        } ?></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>