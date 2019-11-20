<?php 
$ch = curl_init(); 

// url을 설정
curl_setopt($ch, CURLOPT_URL, 'http://www.gachon.ac.kr/community/opencampus/03.jsp?boardType_seq=358'); 


// 헤더는 제외하고 content 만 받음
curl_setopt($ch, CURLOPT_HEADER, 0); 

// 응답 값을 브라우저에 표시하지 말고 값을 리턴
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

// 브라우저처럼 보이기 위해 user agent 사용
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 

$content = curl_exec($ch); 
// $content = iconv('','utf-8',$content);

$a = explode('<td class="tl">', $content);

$url_array = array();
$title_array = array();

for($i=1; $i<count($a); $i++){
    $j = explode('</td>', $a[$i]);
    $j = explode('<img src=', $j[0]);
    $j = $j[0];

    $title = explode('">', $j);
    $title = explode('</', $title[1]);
    $title = trim($title[0]);
    echo $title;
    array_push($title_array, $title);

    $url = explode('<a href="', $j);
    $url = explode('">', $url[1]);
    $url = 'http://www.gachon.ac.kr/community/opencampus/'.trim($url[0]);
    echo $url;
    array_push($url_array, $url);
    echo $j."<br>";
}
?>