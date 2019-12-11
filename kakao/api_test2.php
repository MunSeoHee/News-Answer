<?php
//텍스트 분류

include_once('./setting.php');

$url = 'https://api.maum.ai/api/bert.xdc/'; //접속할 url 입력
$sql = "select script from news where number=84";
$result = mysqli_query($con, $sql);

foreach($result as $res){
    $text = $res['script'];
    // echo $text;
}
// $sql = "update user set news=$number where user_key='$userkey'";
// mysqli_query($con, $sql);

$summ='';

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
// print_r($body_json);

for($i=0; $i<2; $i++){
    //시작 위치;
    $start = $body_json["sentenceIndices"][$i]["startIdx"];
    $start = (int)$start;

    //끝위치
    $end = $body_json["sentenceIndices"][$i]["endIdx"];
    $end = (int)$end;

    //문장
    // echo '<br>'.iconv_substr($text, $start, $end - $start, "utf-8");
    $summ = $summ.iconv_substr($text, $start, $end - $start, "utf-8");
}


curl_close($ch);


?>