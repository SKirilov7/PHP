<?php
if (isset($_GET['person'])) {
    $person = $_GET['person'];
    echo "Hello, $person!";
}
?>

<form>
    Name: <input type="text" name="person"/>
    <input type="submit"/>
</form>
