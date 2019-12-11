<?php
//AI독해

include_once('./setting.php');

$url = 'https://api.maum.ai/api/bert.mrc/'; //접속할 url 입력

//body 파라메터 값
$data = array(
    "apiId" => "gachon.pproject.2564f05e95082",
    "apiKey" => "128c573f3404408f80bab4874e0684eb",
    "lang"=>"kor",
    "context" => "경사진 주차장 고임목 설치 의무화 '하준이법'도 통과내년도 예산안은 오후에 협상 계속할 듯여야는 10일 오전 정기국회 마지막 본회의를 열어 스쿨존에 과속카메라 설치를 의무화하고 사망 사고가 발생할 경우 가중 처벌하는 것을 골자로 한 일명 '민식이법'과 '하준이법' 등을 통과시켰다.10일 본회의에서 의원들이 국가인권위원(양정숙) 선출안에 대해 투표하고 있다.",
    "question" => "ㅋ"
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

echo '<br>'.$body_json["answer"];

$answer = $body_json["answer"];
//var_dump($res);//결과값 확인하기
if($answer==''){
    $answer = "알 수 없습니다:(";
}


curl_close($ch);

?>