<?php

include_once('./setting.php');

$sql = "select * from system";
$result = mysqli_query($con, $sql);
foreach($result as $res){
    echo $res['user'].'<br>'.$res['date'].'<br>'.$res['num'].'<br>'.$res['request'].'<br>'.$res['response'].'<br><br>';
}

?>