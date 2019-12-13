<?php

include_once('./setting.php');

$sql = "select * from system";
$result = mysqli_query($con, $sql);

echo '<table>';
foreach($result as $res){
    echo '<tr>';
    echo '<td>'.$res['num'].'</td>';
    echo '<td>'.$res['user'].'</td>';
    echo '<td>'.$res['date'].'</td>';
    echo '<td>'.$res['url'].'</td>';
    echo '<td>'.$res['request'].'</td>';
    echo '<td>'.$res['response'].'</td>';
    echo '<td>'.$res['type'].'</td>';
    echo '<td>'.$res['file'].'</td>';
    echo '</tr>';
}
echo '</table>';
?>

<script language='javascript'>
window.setTimeout('window.location.reload()',800); //60초마다 새로고침
</script>