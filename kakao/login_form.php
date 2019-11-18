<?php
$user = $_GET["user"];
echo $user;
?>

<script>
function check_input(){
    if(!document.pw.value){
        aletr("비밀번호를 입력하세요");
        document.pw.focus();
        return;
    }
    document.submit();
}

</script>

<form name="login" method="post" action="login.php">
    <input type="text" name="pw">
    <input type="hidden" name="user" value="<?=$user?>">
    <button onclick="check_input()">제출</button>
</form>

