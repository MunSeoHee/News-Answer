<?php

include_once('./setting.php');

$sql = "select * from system";
$result = mysqli_query($con, $sql);
foreach($result as $res){
    echo $res['user'].'<br>'.$res['date'].'<br>'.$res['url'].'<br>'.$res['request'].'<br>'.$res['response'].'<br><br>';
}

?>

<script language='javascript'>
window.setTimeout('window.location.reload()',800); //60초마다 새로고침
</script>