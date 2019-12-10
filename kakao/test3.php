<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<?php
include_once( './setting.php');
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://news.naver.com/');
// 헤더는 제외하고 content 만 받음
curl_setopt($ch, CURLOPT_HEADER, 0); 
// 응답 값을 브라우저에 표시하지 말고 값을 리턴
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
// 브라우저처럼 보이기 위해 user agent 사용
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 
//크롤링해온 내용 content 변수에 저장
$content = curl_exec($ch); 
//인코딩이 utf-8이 아닌경우에만 사용
$content = iconv('euc-kr','utf-8',$content);

$today = date("Y-m-d H:i:s");

//explode로 필요한 부분만 잘라서 사용
//explode('',$변수) -> ''을 기준으로 $변수 의 내용을 자르게 됨. ''기준으로 앞이 0번째 뒤가 1번째

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num1">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$world[0] = $plan[0];

$sql = "select * from db.news where url = '$world[0]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into db.news (url, date, cartegorie) values ('$world[0]', '$today', 4)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num2">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$world[1] = $plan[0];

$sql = "select * from news where url = '$world[1]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$world[1]', '$today', 4)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num3">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$world[2] = $plan[0];

$sql = "select * from news where url = '$world[2]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$world[2]', '$today', 4)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num4">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$world[3] = $plan[0];

$sql = "select * from news where url = '$world[3]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$world[3]', '$today', 4)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num5">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$world[4] = $plan[0];

$sql = "select * from news where url = '$world[4]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$world[4]', '$today', 4)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num6">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$world[5] = $plan[0];

$sql = "select * from news where url = '$world[5]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$world[5]', '$today', 4)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num7">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$world[6] = $plan[0];

$sql = "select * from news where url = '$world[6]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$world[6]', '$today', 4)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num8">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$world[7] = $plan[0];

$sql = "select * from news where url = '$world[7]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$world[7]', '$today', 4)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num9">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$world[8] = $plan[0];

$sql = "select * from news where url = '$world[8]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$world[8]', '$today', 4)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num10">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$world[9] = $plan[0];

$sql = "select * from news where url = '$world[9]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$world[9]', '$today', 4)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num1">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$science[0] = $plan[0];

$sql = "select * from news where url = '$science[0]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$science[0]', '$today', 5)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num2">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$science[1] = $plan[0];

$sql = "select * from news where url = '$science[1]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$science[1]', '$today', 5)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num3">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$science[2] = $plan[0];

$sql = "select * from news where url = '$science[2]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$science[2]', '$today', 5)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num4">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$science[3] = $plan[0];

$sql = "select * from news where url = '$science[3]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$science[3]', '$today', 5)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num5">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$science[4] = $plan[0];

$sql = "select * from news where url = '$science[4]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$science[4]', '$today', 5)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num6">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$science[5] = $plan[0];

$sql = "select * from news where url = '$science[5]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$science[5]', '$today', 5)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num7">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$science[6] = $plan[0];

$sql = "select * from news where url = '$science[6]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$science[6]', '$today', 5)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num8">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$science[7] = $plan[0];

$sql = "select * from news where url = '$science[7]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$science[7]', '$today', 5)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num9">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$science[8] = $plan[0];

$sql = "select * from news where url = '$science[8]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$science[8]', '$today', 5)";
    mysqli_query($con, $sql);
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num10">', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$science[9] = $plan[0];

$sql = "select * from news where url = '$science[9]'"
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result) { } else {
    $sql = "insert into news (url, date, cartegorie) values ('$science[9]', '$today', 5)";
    mysqli_query($con, $sql);
}

curl_close($ch);
?>