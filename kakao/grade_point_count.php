<?php 
$con = mysqli_connect(
    '18.224.229.40',
    'admin',
    'admin',
    'sys',
    '3306'
);

$userkey = $_POST['userkey'];

$sql = "select * from grade_point where user='$userkey'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$total_point = 0;
$total_score = 0;
$r = $row['score'];
$p = $row['point'];
foreach($row as $i){
    $total_point = $total_point + int($i['point']);
    $total_score = $total_score + (float($i['score']) * int($i['point']));
}

$score = $total_score / $total_point;
$score = round($score, 2);
?>