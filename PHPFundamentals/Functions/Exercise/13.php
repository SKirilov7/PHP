<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])) {
    $num = $_GET['num'];

    for ($i = $num - 1; $i >= 2; $i--) {
        $isPrime = true;
        for ($index = 2; $index < $i; $index++) {
            if ($i % $index == 0) {
                $isPrime = false;
            }
        }
        if ($isPrime) {
            echo "$i ";
        }
    }
}
?>
</body>
</html>
