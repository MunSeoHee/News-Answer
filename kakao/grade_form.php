<?php
$user = $_GET["user"];
?>
<script type="text/javascript" src="./login.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- <form name="form" method="post" action="grade.php">
    과목명 : <input type="text" name="subject">
    학점 : <input type="number" name="point">
    점수 : <select name="grade">
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
    
    <button onclick="check_input()">제출</button>
</form> -->

<div class='container d-flex justify-content-center'>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">과목명</label>
    <input type="text" class="form-control" name='subject' id="subject" aria-describedby="subjectHelp" placeholder="과목이름">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">학점</label>
    <input type="number" class="form-control" name='point' id="point" placeholder="학점">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">점수</label>
    <select name="grade" class="form-control" id="grade">
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
  </div>
  <input type="hidden" name="user" value="<?=$user?>">

  <button type="submit" class="btn btn-primary">기록하기</button>
</form>

</div>

