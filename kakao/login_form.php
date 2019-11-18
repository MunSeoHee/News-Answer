<?php
$user = $_GET["user"];
echo $user;
?>
<script type="text/javascript" src="./login.js"></script>

<div id="login_form">
    <form name="login" method="post" action="login.php">
        <input type="text" name="pw" id="pw">
        <input type="hidden" name="user" value="<?=$user?>">
        <button onclick="check_input()">제출</button>
    </form>
</div>

