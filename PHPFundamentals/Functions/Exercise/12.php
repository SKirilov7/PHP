<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if (isset($_GET['num'])){
    $num = $_GET['num'];
    for ($i = 2; $i <= $num; $i += 2){
        echo "$i ";
    }
}
?>
</body>
</html>

