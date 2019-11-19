<?php 
$ch = curl_init(); 

$date = $_POST['date'];


// url을 설정
curl_setopt($ch, CURLOPT_URL, 'http://www.gachon.ac.kr/affairs/info/02.jsp?mode=list&boardType_seq=395&searchopt=&searchword=&cal_mode=next&in_date='.$date); 


// 헤더는 제외하고 content 만 받음
curl_setopt($ch, CURLOPT_HEADER, 0); 

// 응답 값을 브라우저에 표시하지 말고 값을 리턴
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

// 브라우저처럼 보이기 위해 user agent 사용
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 

$content = curl_exec($ch); 
// $content = iconv('','utf-8',$content);

$plan = explode('<div class="day_list">', $content);
$plan = explode('<dd>',$plan[1]);

$calander = '';
for($i=1; $i<count($plan); $i++){
    $day = explode('<span>', $plan[$i]);
    $day = trim($day[0]);
   
    

    $event = explode('">', $plan[$i]);
    $event = explode("</a>", $event[1]);
    $event = trim($event[0]);
    

    $calander = $calander.$day.' : '.$event."\n";
}







?>