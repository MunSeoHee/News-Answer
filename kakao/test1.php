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

//explode로 필요한 부분만 잘라서 사용
//explode('',$변수) -> ''을 기준으로 $변수 의 내용을 자르게 됨. ''기준으로 앞이 0번째 뒤가 1번째
$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">정치</h5>', $plan[1]);
$fix = $plan[1];

$plan = explode('"rank num1"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

$plan[0] = mb_convert_encoding($plan[0], "HTML-ENTITIES", "UTF-8");
echo $plan;
/*$sql = "select * from news where url ='$plan[0]'";

$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);
echo $result;

if ($result){
    
}
else{
    $sql = "insert into news (url, categorie) values ('$plan[0]', 1)";
    mysqli_query($con, $sql);
}

//$rank_p = [];
//$rank_p[0] = $plan[0];



$plan = explode('"rank num2"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank[1] = $plan[0];
$plan[0] = mb_convert_encoding($plan[0], "HTML-ENTITIES", "UTF-8");
$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, categorie) values ('$plan[0]', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num3"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[2] = $plan[0];

$plan[0] = mb_convert_encoding($plan[0], "HTML-ENTITIES", "UTF-8");
$sql = "select * from news where url ='$plan[0]'";

$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);
echo $result;

if ($result){
    
}
else{
    $sql = "insert into news (url, categorie) values ('$plan[0]', 1)";
    mysqli_query($con, $sql);
}
*/



/*
$plan = explode('"rank num4"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[3] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, categorie) values ('$plan[0]', 1)";
    mysqli_query($con, $sql);
}


$plan = explode('"rank num5"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[4] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, categorie) values ('$plan[0]', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num6"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[5] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, categorie) values ('$plan[0]', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num7"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[6] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, categorie) values ('$plan[0]', 1)";
    mysqli_query($con, $sql);
}


$plan = explode('"rank num8"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[7] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, categorie) values ('$plan[0]', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num9"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[8] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, categorie) values ('$plan[0]', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num10"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[9] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, categorie) values ('$plan[0]', 1)";
    mysqli_query($con, $sql);
}


*/
//----------------------------------------------------------------

/*
$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">경제</h5>', $plan[1]);
$fix = $plan[1];

$plan = explode('"rank num1"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e = [];
//$rank_e[0] = $plan[0];



$plan = explode('"rank num2"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[1] = $plan[0];


$plan = explode('"rank num3"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[2] = $plan[0];



$plan = explode('"rank num4"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[3] = $plan[0];


$plan = explode('"rank num5"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[4] = $plan[0];


$plan = explode('"rank num6"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[5] = $plan[0];



$plan = explode('"rank num7"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[6] = $plan[0];



$plan = explode('"rank num8"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[7] = $plan[0];



$plan = explode('"rank num9"', $fix]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[8] = $plan[0];



$plan = explode('"rank num10"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[9] = $plan[0];

*/
curl_close($ch);
get_script($rank_e[0]);


?>
