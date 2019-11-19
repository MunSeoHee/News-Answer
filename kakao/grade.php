<?php
$user = $_POST["user"];
$subject = $_POST["subject"];
$point = $_POST["point"];
$grade = $_POST["grade"];

$con = mysqli_connect(
    '18.224.229.40',
    'admin',
    'admin',
    'db',
    '3306'
);

if (mysqli_connect_errno()){
    echo "fail to connect mysql : ".mysqli_connect_error();
}

mysql_set_charset('utf8', $con);
$sql = "insert into grade_point (subject, point, score, user) values ('$subject', '$point', '$grade', '$user')";
mysqli_query($con, $sql);
mysqli_close($con);

echo "
    <script>
        location.href = 'grade_form.php?user=$user';
    </script>
"


?>