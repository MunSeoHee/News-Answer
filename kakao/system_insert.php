<?php
include_once('./setting.php');
$today = date("Y-m-d H:i:s");
$sql = "insert into system (user, date, url, request, response) values ('$userkey', '$today', '$url', '$request', '$response')";
mysqli_query($con, $sql);
?>