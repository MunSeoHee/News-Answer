<?php
$user = $_GET["user"];
echo $user;
?>

<form name="login" method="post" action="login.php">
    <input type="text" name="pw">
    <input type="hidden" name="user" value="<?=$user?>">
    <button onclick="check_input()"></button>
</form>

<script>
function check_input(){
    if(!document.login_form.pw.value){
        aletr("비밀번호를 입력하세요");
        document.login_form.pw.focus();
        return;
    }
    document.login_form.submit();
}

</script>