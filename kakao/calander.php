<?php 
$ch = curl_init(); 
$date = array('201910','201911', '201912','202001' );
$con = mysqli_connect(
    '18.224.229.40',
    'admin',
    'admin',
    'sys',
    '3306'
);

$sql = "insert into calander(month, date, plan) values (";
foreach($date as $d){
    // url을 설정
    curl_setopt($ch, CURLOPT_URL, 'http://www.gachon.ac.kr/affairs/info/02.jsp?mode=list&boardType_seq=395&searchopt=&searchword=&cal_mode=next&in_date='.$d); 


    // 헤더는 제외하고 content 만 받음
    curl_setopt($ch, CURLOPT_HEADER, 0); 

    // 응답 값을 브라우저에 표시하지 말고 값을 리턴
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // 브라우저처럼 보이기 위해 user agent 사용
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 

    $content = curl_exec($ch); 
    // $content = iconv('','utf-8',$content);

    switch($d){
        case '201910':
            $month = "11월";
        break;
        case '201911':
            $month = "12월";
        break;
        case '201912':
            $month = "1월";
        break;
        case '202001':
            $month = "2월";
        break;
    }

    $plan = explode('<div class="day_list">', $content);
    $plan = explode('<dd>',$plan[1]);

    for($i=1; $i<count($plan); $i++){
        $day = explode('<span>', $plan[$i]);
        $day = trim($day[0]);
    
        $event = explode('">', $plan[$i]);
        $event = explode("</a>", $event[1]);
        $event = trim($event[0]);
        

        $sql = $sql.$month.",".$day.",".$event.")";
        echo $sql;
        mysqli_query($con, $sql);
        $sql = "insert into calander(month, date, plan) values (";
        

    }

    
}
mysqli_close($con);

?>