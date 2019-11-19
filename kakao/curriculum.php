<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<?php 
$ch = curl_init(); 
$con = mysqli_connect(
    '18.224.229.40',
    'admin',
    'admin',
    'db',
    '3306'
);

$arr = array('it/02', 'it/03', 'it/04', 'it/07', 
            'koreanmedicine/01', 
            'arts/01', 'arts/02', 'arts/03', 'arts/04', 'arts/05', 'arts/06', 'arts/07', 'arts/08', 'arts/09', 'arts/010',
            'bionano/03', 'bionano/06', 'bionano/05', 'bionano/04', 'bionano/01', 'bionano/02',
            'archi/01', 'archi/02', 'archi/03', 'archi/04', 'archi/05',
            'engineering/02', 'engineering/03', 'engineering/09', 'engineering/04', 'engineering/05', 'engineering/06', 'engineering/10',
            'business1/01', 'business1/05', 
            'socialscience/02', 'socialscience/03', 'socialscience/04', 'socialscience/05', 'socialscience/06', 'socialscience/07', 'socialscience/08',
            'civilization/01', 'civilization/02', 'civilization/03', 'civilization/04',
            'law/01', 'law/02', 'law/06', 'law/07',
        );

foreach($arr as $a){
// url을 설정
curl_setopt($ch, CURLOPT_URL, 'http://www.gachon.ac.kr/major/'.$a.'/curriculum.jsp'); 


// 헤더는 제외하고 content 만 받음
curl_setopt($ch, CURLOPT_HEADER, 0); 

// 응답 값을 브라우저에 표시하지 말고 값을 리턴
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

// 브라우저처럼 보이기 위해 user agent 사용
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 

$content = curl_exec($ch); 
// $content = iconv('','utf-8',$content);


$table = explode('<tbody>', $content);
$table = explode('</tbody>', $table[1]);
echo $table[0];
$major = explode('<h3><a', $content);
$major = explode('alt="', $major[1]);
$major = explode('"', $major[1]);
$major = trim($major[0]);
echo $major;

$tr = explode("<tr>", $table[0]);
array_shift($tr);
foreach($tr as $t){
    if(strpos($t, '<td scope="row"') !== false){
        $year = explode('<td scope="row"', $t);
        $year = explode('>', $year[1]);
        $year = explode('</td>', $year[1]);
        $year = trim($year[0]);
    }
    
    
    $subject = explode('<td class="tl">', $t);
    $subject = explode('</td>', $subject[1]);
    $subject = trim($subject[0]);
    
    $td = explode("<td>", $t);
    $division = explode('</td>',$td[1]);
    $division = trim($division[0]);
    
    $point = explode('</td>',$td[2]);
    $point = trim($point[0]);
    
    echo "<br>학년 : ".$year;
    echo "<br>과목 : ".$subject;
    echo "<br>구분 : ".$division;
    echo "<br>학점 : ".$point;
    echo '<br>';

    $sql = "insert into calander(major, year, subject, point, division, semester) values ('$major','$year','$subject', '$point', '1학기')";
    mysqli_query($con, $sql);

}

$table = explode('<tbody>', $content);
$table = explode('</tbody>', $table[2]);
echo $table[0];

$tr = explode("<tr>", $table[0]);
array_shift($tr);
foreach($tr as $t){
    if(strpos($t, '<td scope="row"') !== false){
        $year = explode('<td scope="row"', $t);
        $year = explode('>', $year[1]);
        $year = explode('</td>', $year[1]);
        $year = trim($year[0]);
    }
    
   
    $subject = explode('<td class="tl">', $t);
    $subject = explode('</td>', $subject[1]);
    $subject = trim($subject[0]);
    
    $td = explode("<td>", $t);
    $division = explode('</td>',$td[1]);
    $division = trim($division[0]);
   
    $point = explode('</td>',$td[2]);
    $point = trim($point[0]);
    

    echo "<br>학년 : ".$year;
    echo "<br><br>과목 : ".$subject;
    echo "<br>구분 : ".$division;
    echo "<br>학점 : ".$point;
    echo '<br>';
    $sql = "insert into calander(major, year, subject, point, division, semester) values ('$major','$year','$subject', '$point', '2학기')";
    mysqli_query($con, $sql);

}



}



?>