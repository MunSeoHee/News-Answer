<?php
$user = $_GET["user"];
echo $user;
?>

<form name="login" method="post" action="input.php">
    <input type="text" name="pw">
    <input type="submit">
</form>