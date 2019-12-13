<?php
include_once('./setting.php');
$today = date("Y-m-d H:i:s");
$sql = "insert into system (user, date, url, request, response, file, type) values ('$userkey', '$today', '$url', '$request', '$response', '$file', '$type')";
mysqli_query($con, $sql);
?>