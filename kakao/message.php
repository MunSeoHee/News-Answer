<?php
    include './setting.php';
    
    $data = json_decode(file_get_contents('php://input'), true);
    $userkey = $data["user_key"];
    $content = $data["content"];
    $sql = "select * from user where user_key='$userkey'";
    $result = mysqli_query($con, $sql);

    switch($content)
    {
        
        case "정치":
            
            if ( mysqli_num_rows($result)){
                $sql = "update user set category=0 where user_key='$userkey'";
                mysqli_query($con, $sql);
            }
            else{
                $sql = "insert into user (user_key, category) values ('$userkey', 0)";
                mysqli_query($con, $sql);
            }
            $num=1;
            $url = 'https://api.maum.ai/api/bert.xdc/'; //접속할 url 입력
            $sql = "select script from news where categorie=$num order by rand() limit 1";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                $text = $res['script'];
                // echo $text;
            }

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
            echo <<<EOD
            {
                "message":
                {
                    "text": "$summ"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기"]
                }
            }
EOD;
            break;
        case "경제":
            if ( mysqli_num_rows($result)){
                $sql = "update user set category=1 where user_key='$userkey'";
                mysqli_query($con, $sql);
            }
            else{
                $sql = "insert into user (user_key, category) values ('$userkey', 1)";
                mysqli_query($con, $sql);
            }
            echo <<<EOD
            {
                "message":
                {
                    "text": "뉴스요약"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기"]
                }
            }
EOD;
            break;
        case "사회":
        
            if ( mysqli_num_rows($result)){
                $sql = "update user set category=2 where user_key='$userkey'";
                mysqli_query($con, $sql);
            }
            else{
                $sql = "insert into user (user_key, category) values ('$userkey', 2)";
                mysqli_query($con, $sql);
            }
            echo <<<EOD
            {
                "message":
                {
                    "text": "뉴스요약"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기"]
                }
            }
EOD;
            break;
        case "생활/문화":
    
            if ( mysqli_num_rows($result)){
                $sql = "update user set category=3 where user_key='$userkey'";
                mysqli_query($con, $sql);
            }
            else{
                $sql = "insert into user (user_key, category) values ('$userkey', 3)";
                mysqli_query($con, $sql);
            }
            echo <<<EOD
            {
                "message":
                {
                    "text": "뉴스요약"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기"]
                }
            }
EOD;
            break;
        case "세계":

            if ( mysqli_num_rows($result)){
                $sql = "update user set category=4 where user_key='$userkey'";
                mysqli_query($con, $sql);
            }
            else{
                $sql = "insert into user (user_key, category) values ('$userkey', 4)";
                mysqli_query($con, $sql);
            }
            echo <<<EOD
            {
                "message":
                {
                    "text": "뉴스요약"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기"]
                }
            }
EOD;
            break;
        case "IT/과학":

            if ( mysqli_num_rows($result)){
                $sql = "update user set category=5 where user_key='$userkey'";
                mysqli_query($con, $sql);
            }
            else{
                $sql = "insert into user (user_key, category) values ('$userkey', 5)";
                mysqli_query($con, $sql);
            }
            echo <<<EOD
            {
                "message":
                {
                    "text": "뉴스요약"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기"]
                }
            }
EOD;
            break;
        case "카테고리 재선택":
            echo <<<EOD
            {
                "message":
                {
                    "text": "카테고리를 선택해주세요"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["정치", "경제", "사회", "생활/문화", "세계","IT/과학"]
                }
            }
EOD;
            
            break;
    }

    
?>