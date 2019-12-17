<?php

include_once('./setting.php');

$sql = "select * from system order by num desc limit 50";

$result = mysqli_query($con, $sql);

echo '<table>';
echo '<tr>
        <th style="width: 5%">#</th>
        <th style="width: 10%">date</th>
        <th style="width: 10%">user</th>
        <th style="width: 20%">요청</th>
        <th style="width: 20%">응답</th>
        <th style="width: 20%">url</th>
        <th style="width: 5%">type</th>
        <th style="width: 10%">file</th>
      </tr>';
foreach($result as $res){
    echo '<tr>';
    echo '<td>'.$res['num'].'</td>';
    echo '<td>'.$res['date'].'</td>';
    echo '<td>'.$res['user'].'</td>';
    echo '<td>'.$res['request'].'</td>';
    echo '<td>'.$res['response'].'</td>';
    echo '<td>'.$res['url'].'</td>';
    echo '<td>'.$res['type'].'</td>';
    echo '<td>'.$res['file'].'</td>';
    echo '</tr>';
}
echo '</table>';
?>

<script language='javascript'>
window.setTimeout('window.location.reload()',800); //60초마다 새로고침
</script>