<?php
$user = $_GET["user"];
echo $user;
?>
<script type="text/javascript" src="./login.js"></script>


<form name="form" method="post" action="grade.php">
    <input type="text" name="subject">
    <input type="number" name="point">
    <select name="grade">
        <option value="4.5">A+</option>
        <option value="4.0">A</option>
        <option value="3.5">B+</option>
        <option value="3.0">B</option>
        <option value="2.5">C+</option>
        <option value="2.0">C</option>
        <option value="1.5">D+</option>
        <option value="1.0">D</option>
        <option value="0">F</option>
    </select>
    <input type="hidden" name="user" value="<?=$user?>">
    <button onclick="check_input()">제출</button>
</form>


