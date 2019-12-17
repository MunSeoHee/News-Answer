<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script language='javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script language='javascript' src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script language='javascript' src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<?php

include_once('./setting.php');

$sql = "select * from system order by num desc limit 50";

$result = mysqli_query($con, $sql);

echo '<div class="container w-100 m-0 p-0">';
echo '<table class="table table-bordered m-1">';
echo '<thead class="thead-dark text-center">
      <tr>
        <th style="width: 5%">#</th>
        <th style="width: 15%">date</th>
        <th style="width: 10%">user</th>
        <th style="width: 20%">요청</th>
        <th style="width: 20%">응답</th>
        <th style="width: 20%">url</th>
        <th style="width: 5%">type</th>
        <th style="width: 5%">file</th>
      </tr>
      </thead>';
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
echo '</div>';
?>

<script language='javascript'>
window.setTimeout('window.location.reload()',800); //60초마다 새로고침
</script>