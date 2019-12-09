<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<?php 

include_once('./setting.php');
$sql = "select url from news where script is null";
$result = mysqli_query($con, $sql);

foreach($result as $url){
    echo $url['url'];
    $url = $url['url'];
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, 'https://news.naver.com'.$url); 
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
    $text = explode('articleBodyContents', $content);
    $text = explode('</script>', $text[1]);
    $text = explode('▶', $text[1]);
    $text = $text[0];
    
    $script = preg_replace("(\<(/?[^\>]+)\>)", "", $text);
    echo $script;
    
    curl_close($ch);
    $sql = "insert into news (script) values ('$script') where url='$url'";
    $result = mysqli_query($con, $sql);
    echo $result;
}







?>