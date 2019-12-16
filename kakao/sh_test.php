<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<?php 

include_once('./setting.php');
$sql = "select url from news where script is null";
$result = mysqli_query($con, $sql);

foreach($result as $url){
    echo '<pre>'.$url['url'].'</pre>';
    $url = $url['url'];
    $urls = str_replace('amp;','',$url);
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, 'https://news.naver.com'.$urls); 
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
        

    //국민일보
    if(strpos($text[1], '[국민일보')){
        $text = explode('<a href="http://naver.me/GxmvUNz3" target="_blank"', $text[1]);
        $text = $text[0];
    }
    //조선일보
    else if(strpos($text[1], 'ⓒ 조선일보')){
        $text = explode('- Copyrights ⓒ 조선일보 & chosun.com', $text[1]);
        $text = $text[0];
    }
    //데일리안
    else if(strpos($text[1], 'ⓒ (주)데일리안')){
        $text = explode('ⓒ (주)데일리안', $text[1]);
        $text = $text[0];
    }    
    //문화닷컴
    else if(strpos($text[1], '문화닷컴 바로가기')){
        $text = explode("[ <a href='http://www.munhwa.com'", $text[1]);
        $text = $text[0];
    }    
    //이데일리
    else if(strpos($text[1], 'ⓒ종합 경제정보 미디어 이데일리')){
        $text = explode("네이버 홈에서 ‘이데일리’ 뉴스", $text[1]);
        $text = $text[0];
    }
    //세계일보 
    else if(strpos($text[1], 'ⓒ 세상을 보는 눈')){
        $text = explode("ⓒ 세상을 보는 눈", $text[1]);
        $text = $text[0];
    }
    //매일경제   
    else if(strpos($text[1], 'ⓒ 매일경제')){
        $text = explode('<a href="http://www.mk.co.kr', $text[1]);
        $text = $text[0];
    }
    //중앙일보, 한국경제TV, 한국경제, 서울신문
    else if(strpos($text[1], 'ⓒ중앙일보') || strpos($text[1], '한국경제') || strpos($text[1], '서울신문')){
        $text = explode("<br>▶ <a href=", $text[1]);
        $text = $text[0];
    }
    //한국일보  
    else if(strpos($text[1], '한국일보닷컴')){
        $text = explode("▶<a href=", $text[1]);
        $text = $text[0];
    }
    //뉴스1   
    else if(strpos($text[1], '[뉴스1]')){
        $text = explode("<br><br><p><a target", $text[1]);
        $text = $text[0];
    }
    //지디넷코리아
    else if(strpos($text[1], '지디넷코리아')){
        $text = explode("▶ 지디넷코리아 '홈페이지'", $text[1]);
        $text = $text[0];
    }
    //시사저널
    else if(strpos($text[1], '시사저널')){
        $text = explode("ⓒ 시사저널", $text[1]);
        $text = $text[0];
    }
    // SBSCNBC
    else if(strpos($text[1], 'SBSCNBC')){
        $text = explode("☞ SBSCNBC를 만나는 법", $text[1]);
        $text = $text[0];
    }
    //나머지 언론사
    else{
        $text = explode('<br><br><a href', $text[1]);
        $text = $text[0];
    }

    $script = preg_replace("(\<(/?[^\>]+)\>)", "", $text);
    $script = trim($script);
    $script = str_replace("'", '"', $script);

    $script = str_replace('▲', '', $script);
    $script = str_replace('△', '', $script);
    $script = str_replace('▷', '', $script);
    $script = str_replace('■', '', $script);
    $script = str_replace('◇', '', $script);
    $script = str_replace('◆', '', $script);
    $script = str_replace('○', '', $script);
    $script = str_replace('▽', '', $script);
    $script = str_replace('◆', '', $script);
    $script = str_replace('◀', '', $script);
    $script = str_replace('▶', '', $script);
    
    echo $script;

    
    if ($script != ''){
        $sql = "update news set script=".$script." where url=".$url;
        echo '<pre>'.$sql.'</pre>';

        if (mysqli_query($con, $sql)) {

            echo "레코드 수정 성공!";

        } else {

            echo "레코드 수정 실패! : ".mysqli_error($con);

        }
       /* $response = $script;
        $type = 'DB';
        $file = 'sh_test.php';
        $today = date("Y-m-d H:i:s");
        $sql = "insert into system (date, url, response, file, type) values (".$today.", ".$url.", ".$response.", ". $file.", ".$type.")";
        echo $sql;
        //mysqli_query($con, $sql);*/
    }
  
    curl_close($ch);
   
}


mysql_close($con);




?>