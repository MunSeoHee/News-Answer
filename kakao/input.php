<?php

$con = mysqli_connect(
    '18.224.229.40',
    'admin',
    'admin',
    'sys',
    '3306'
);
if (mysqli_connect_errno()){
    echo "fail to connect mysql : ".mysqli_connect_error();
}
$sql = "SELECT VERSION()";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
echo $row["VERSION()"];

$sql = "SELECT userkey from user where userkey='dfse'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
echo $row['userkey'];
if ($row['userkey'] == ''){
    echo 'dfdf';
}
?>