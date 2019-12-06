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
$world = [];
$science = [];

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<span class="rank num1">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$world[0] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num2">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$world[1] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num3">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$world[2] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num4">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$world[3] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num5">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$world[4] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num6">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$world[5] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num7">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$world[6] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num8">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$world[7] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num9">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$world[8] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_104" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num10">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$world[9] = $plan;


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num1">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$science[0] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num2">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$science[1] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num3">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$science[2] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num4">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$science[3] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num5">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$science[4] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num6">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$science[5] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num7">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$science[6] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num8">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$science[7] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num9">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$science[8] = $plan;

$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<div id="ranking_105" style="display:none">', $plan[1]);
$plan = explode('<span class="rank num10">', $plan[1]);
$plan = explode('</span>', $plan[1]);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);
$plan = "https://news.naver.com/".$plan[0];
$science[9] = $plan;
?>