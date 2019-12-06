<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<?php 
// $ch = curl_init(); 

// curl_setopt($ch, CURLOPT_URL, 'https://news.naver.com/main/ranking/read.nhn?mid=etc&sid1=111&rankingType=popular_day&oid=025&aid=0002957536&date=20191203&type=1&rankingSeq=2&rankingSectionId=100'); 
// // 헤더는 제외하고 content 만 받음
// curl_setopt($ch, CURLOPT_HEADER, 0); 
// // 응답 값을 브라우저에 표시하지 말고 값을 리턴
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
// // 브라우저처럼 보이기 위해 user agent 사용
// curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 
// //크롤링해온 내용 content 변수에 저장
// $content = curl_exec($ch); 
// //인코딩이 utf-8이 아닌경우에만 사용
// $content = iconv('euc-kr','utf-8',$content);

// //explode로 필요한 부분만 잘라서 사용
// //explode('',$변수) -> ''을 기준으로 $변수 의 내용을 자르게 됨. ''기준으로 앞이 0번째 뒤가 1번째
// $text = explode('articleBodyContents', $content);
// $text = explode('</script>', $text[1]);
// $text = explode('▶', $text[1]);
// $text = $text[0];

// echo preg_replace("(\<(/?[^\>]+)\>)", "", $text).'<br>';


// curl_setopt($ch, CURLOPT_URL, 'https://news.naver.com/main/ranking/read.nhn?mid=etc&sid1=111&rankingType=popular_day&oid=028&aid=0002476899&date=20191203&type=1&rankingSeq=1&rankingSectionId=103'); 
// // 헤더는 제외하고 content 만 받음
// curl_setopt($ch, CURLOPT_HEADER, 0); 
// // 응답 값을 브라우저에 표시하지 말고 값을 리턴
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
// // 브라우저처럼 보이기 위해 user agent 사용
// curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 
// //크롤링해온 내용 content 변수에 저장
// $content = curl_exec($ch); 
// //인코딩이 utf-8이 아닌경우에만 사용
// $content = iconv('euc-kr','utf-8',$content);

// //explode로 필요한 부분만 잘라서 사용
// //explode('',$변수) -> ''을 기준으로 $변수 의 내용을 자르게 됨. ''기준으로 앞이 0번째 뒤가 1번째
// $text = explode('articleBodyContents', $content);
// $text = explode('</script>', $text[1]);
// $text = explode('▶', $text[1]);
// $text = $text[0];

// echo preg_replace("(\<(/?[^\>]+)\>)", "", $text).'<br>';

// curl_setopt($ch, CURLOPT_URL, 'https://news.naver.com/main/ranking/read.nhn?mid=etc&sid1=111&rankingType=popular_day&oid=025&aid=0002957537&date=20191203&type=2&rankingSeq=3&rankingSectionId=100'); 
// // 헤더는 제외하고 content 만 받음
// curl_setopt($ch, CURLOPT_HEADER, 0); 
// // 응답 값을 브라우저에 표시하지 말고 값을 리턴
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
// // 브라우저처럼 보이기 위해 user agent 사용
// curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 
// //크롤링해온 내용 content 변수에 저장
// $content = curl_exec($ch); 
// //인코딩이 utf-8이 아닌경우에만 사용
// $content = iconv('euc-kr','utf-8',$content);

// //explode로 필요한 부분만 잘라서 사용
// //explode('',$변수) -> ''을 기준으로 $변수 의 내용을 자르게 됨. ''기준으로 앞이 0번째 뒤가 1번째
// $text = explode('articleBodyContents', $content);
// $text = explode('</script>', $text[1]);
// $text = explode('▶', $text[1]);
// $text = $text[0];

// echo preg_replace("(\<(/?[^\>]+)\>)", "", $text).'<br>';


$url = 'https://api.maum.ai/api/bert.mrc/'; //접속할 url 입력
 
// $post_data["apiId"] = "gachon.pproject.2564f05e95082";
// $post_data["apiKey"] = "128c573f3404408f80bab4874e0684eb";
// $post_data["lang"] = "eng";
// $post_data["context"] = "Born in Hungary in 1913 as Friedmann Endre Ernő, Capa was forced to leave his native country after his involvement in anti government protests. Capa had originally wanted to become a writer, but after his arrival in Berlin had first found work as a photographer. He later left Germany and moved to France due to the rise in Nazism. He tried to find work as a freelance journalist and it was here that he changed his name to Robert Capa, mainly because he thought it would sound more American.";
// $post_data["question"] = "Why did Capa changed his name?";

$data = array(
    "apiId" => "gachon.pproject.2564f05e95082",
    "apiKey" => "128c573f3404408f80bab4874e0684eb",
    "lang"=>"eng",
    "context" => "Born in Hungary in 1913 as Friedmann Endre Ernő, Capa was forced to leave his native country after his involvement in anti government protests. Capa had originally wanted to become a writer, but after his arrival in Berlin had first found work as a photographer. He later left Germany and moved to France due to the rise in Nazism. He tried to find work as a freelance journalist and it was here that he changed his name to Robert Capa, mainly because he thought it would sound more American.",
    "question" => "Why did Capa changed his name?"
);

$data_string = json_encode($data);
 
// $access_token_value = "올바른 access token 입력";
 
//$header_data = array('Authorization: Bearer access_token_value'); //에러 발생
$header_data = [];
$header_data[] = 'Content-Type : application/json';
 
$ch = curl_init(); //curl 사용 전 초기화 필수(curl handle)
 
curl_setopt($ch, CURLOPT_URL, $url); //URL 지정하기
curl_setopt($ch, CURLOPT_POST, 1); //0이 default 값이며 POST 통신을 위해 1로 설정해야 함
curl_setopt ($ch, CURLOPT_POSTFIELDS, $data_string); //POST로 보낼 데이터 지정하기
curl_setopt ($ch, CURLOPT_POSTFIELDSIZE, 0); //이 값을 0으로 해야 알아서 &post_data 크기를 측정하는듯
 
curl_setopt($ch, CURLOPT_HEADER, true);//헤더 정보를 보내도록 함(*필수)
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json')); //header 지정하기
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); //이 옵션이 0으로 지정되면 curl_exec의 결과값을 브라우저에 바로 보여줌. 이 값을 1로 하면 결과값을 return하게 되어 변수에 저장 가능(테스트 시 기본값은 1인듯?)
$res = curl_exec ($ch);
 
var_dump($res);//결과값 확인하기
echo '<br>';
// print_r(curl_getinfo($ch));//마지막 http 전송 정보 출력
// echo curl_errno($ch);//마지막 에러 번호 출력
// echo curl_error($ch);//현재 세션의 마지막 에러 출력
curl_close($ch);


?>