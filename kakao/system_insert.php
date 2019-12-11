<?php
include_once('./setting.php');

$sql = "insert into system (user, date, url, request, response) values ($userkey, now(), $url, $request, $response)";
mysqli_query($con, $sql);
?>