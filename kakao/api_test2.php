<?php
//텍스트 분류


include_once('./setting.php');
$url = 'https://api.maum.ai/api/bert.xdc/'; //접속할 url 입력
$sql = "select script from news where categorie=0 order by rand() limit 1;";
$result = mysqli_query($con, $sql);
$text = $result[0]['script'];
// $text = "지난해 야구 국가대표 사령탑 지휘봉을 스스로 내려놓은 국보급 투수 선동열 전 감독이 새로운 도전에 나섭니다. 선 전 감독은 오늘(11일) 서울 목동구장에서 기자 회견을 열어 내년 미국프로야구 메이저리그 뉴욕 양키스 구단의 스프링캠프에 참가해 메이저리그 선진 야구를 배울 생각이라고 밝혔습니다. 기자회견에 동석한 스티브 윌슨 양키스 국제담당 총괄 스카우트는 양키스 구단이 일본 지도자를 구단에 초청한 적은 있지만, 한국 지도자는 최초로 초청한다며 영광으로 생각한다고 덧붙였습니다. 자세한 인터뷰 내용은 영상으로 확인하시죠.";
//body 파라메터 값
$data = array(
    "apiId" => "gachon.pproject.2564f05e95082",
    "apiKey" => "128c573f3404408f80bab4874e0684eb",
    "context" => $text,
);

//body값 json 인코딩
$data_string = json_encode($data);
 
$ch = curl_init(); //curl 사용 전 초기화 필수(curl handle)
 
curl_setopt($ch, CURLOPT_URL, $url); //URL 지정하기
curl_setopt($ch, CURLOPT_POST, 1); //0이 default 값이며 POST 통신을 위해 1로 설정해야 함
curl_setopt ($ch, CURLOPT_POSTFIELDS, $data_string); //POST로 보낼 데이터 지정하기
curl_setopt ($ch, CURLOPT_POSTFIELDSIZE, 0); //이 값을 0으로 해야 알아서 &post_data 크기를 측정하는듯
 
curl_setopt($ch, CURLOPT_HEADER, true);//헤더 정보를 보내도록 함(*필수)
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json')); //header 지정하기
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); //이 옵션이 0으로 지정되면 curl_exec의 결과값을 브라우저에 바로 보여줌. 이 값을 1로 하면 결과값을 return하게 되어 변수에 저장 가능(테스트 시 기본값은 1인듯?)
$res = curl_exec ($ch); //결과

//결과에서 헤더 잘라내고 body만 가져옴
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($res, 0, $header_size);
$body = substr($res, $header_size);    
 //body부분을 json으로 디코딩
$body_json = json_decode($body, true);
print_r($body_json);

for($i=0; $i<2; $i++){
    //시작 위치;
    $start = $body_json["sentenceIndices"][$i]["startIdx"];
    $start = (int)$start;

    //끝위치
    $end = $body_json["sentenceIndices"][$i]["endIdx"];
    $end = (int)$end;

    //문장
    echo '<br>'.iconv_substr($text, $start, $end - $start, "utf-8");
}


curl_close($ch);

?>