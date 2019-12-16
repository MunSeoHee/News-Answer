<?php

include_once('./setting.php');

$sql = "select * from system";
$result = mysqli_query($con, $sql);

echo '<table border="1">';
echo '<tr>
        <th>#</th>
        <th>user</th>
        <th>date</th>
        <th>url</th>
        <th>요청</th>
        <th>응답</th>
        <th>type</th>
        <th>file</th>
        </tr>';
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
echo '<style>
        table { width:100%; border-collapse: collapse; }
        td, th { border: 1px solid #dddddd; padding: 5px; }
    </style>';
?>

<script language='javascript'>
window.setTimeout('window.location.reload()',800); //60초마다 새로고침
</script>