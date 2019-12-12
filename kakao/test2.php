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
$time = date("Y-m-d H:i:s");

// $social = [];
/*
$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num1">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
// $social[0] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 2)";
    mysqli_query($con, $sql); 
}

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num2">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
// $social[1] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 2)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num3">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$social[2] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 2)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num4">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$social[3] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 2)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num5">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$social[4] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 2)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num6">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$social[5] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 2)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num7">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$social[6] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 2)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num8">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$social[7] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 2)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num9">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$social[8] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 2)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num10">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$social[9] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 2)";
    mysqli_query($con, $sql); 
}


//--------------------------------------------------

//$Life_Culture = [];

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num1">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$Life_Culture[0] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 3)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num2">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$Life_Culture[1] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 3)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num3">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$Life_Culture[2] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 3)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num4">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$Life_Culture[3] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 3)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num5">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$Life_Culture[4] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 3)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num6">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$Life_Culture[5] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 3)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num7">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$Life_Culture[6] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 3)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num8">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$Life_Culture[7] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 3)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num9">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$Life_Culture[8] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 3)";
    mysqli_query($con, $sql); 
}


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num10">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
//$Life_Culture[9] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result= mysqli_num_rows($result);

if($result) {
}
else {  
    $sql = "insert into news (url, date, categorie) values ('$plan[0]','$time', 3)";
    mysqli_query($con, $sql); 
}
*/

$sql = "delete from news where categorie in (
            select * from (
                select categorie from news order by date desc limit 5, 10000) A )";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ";
}

curl_close($ch);
?>