<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<?php 
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
$social = [];

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num1">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$social[0] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num2">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$social[1] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num3">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$social[2] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num4">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$social[3] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num5">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$social[4] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num6">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$social[5] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num7">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$social[6] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num8">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$social[7] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num9">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$social[8] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">사회</h5>', $plan[1]);
$plan = explode('<span class="rank num10">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$social[9] = "https://news.naver.com".$plan[0];


//--------------------------------------------------

$Life_Culture = [];

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num1">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$Life_Culture[0] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num2">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$Life_Culture[1] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num3">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$Life_Culture[2] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num4">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$Life_Culture[3] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num5">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$Life_Culture[4] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num6">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$Life_Culture[5] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num7">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$Life_Culture[6] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num8">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$Life_Culture[7] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num9">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$Life_Culture[8] = "https://news.naver.com".$plan[0];


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">생활/문화</h5>', $plan[1]);
$plan = explode('<span class="rank num10">', $plan[1]);
$plan = explode('<a href="',$plan[1]);
$plan = explode('" class=', $plan[1]);
$Life_Culture[9] = "https://news.naver.com".$plan[0];
curl_close($ch);
?>