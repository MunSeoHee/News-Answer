<?php
    include './setting.php';
    
    $data = json_decode(file_get_contents('php://input'), true);

    $userkey = $data["user_key"];
    $content = $data["content"];

    $sql = "select * from user where user_key='$userkey'";
    $result = mysqli_query($con, $sql);

    $request = "select * from user where user_key=".$userkey;
    if($result){
        $response = 'success';
    }else{
        $response = 'DB select error';
    }
    $type = 'DB';
    $file = 'message.php';
    $today = date("Y-m-d H:i:s");
    $url = '';
    $sql = "insert into system (user, date, url, request, response, file, type) values ('$userkey', '$today', '$url', '$request', '$response', '$file', '$type')";
    mysqli_query($con, $sql);

        

    switch($content)
    {
        
        case "정치":
            
            if (mysqli_num_rows($result)){
                $sql = "update user set category=0 where user_key='$userkey'";
                mysqli_query($con, $sql);
                $request = "update user set category=0 where user_key=".$userkey;
            }
            else{
                $sql = "insert into user (user_key, category) values ('$userkey', 0)";
                mysqli_query($con, $sql);
                $request = "insert into user (user_key, category) values (".$userkey.", 0)";
                
            }
            $response = 'success';
            $type = 'DB';
            $file = 'message.php';
            $today = date("Y-m-d H:i:s");
            $sql = "insert into system (user, date, url, request, response, file, type) values ('$userkey', '$today', '$url', '$request', '$response', '$file', '$type')";
            mysqli_query($con, $sql);
            // $num=0;
            $sql = "select number from news where categorie=0 order by rand() limit 1";
            $result = mysqli_query($con, $sql);
            $request = $sql;

            foreach($result as $res){
                if ($res['number'] != null){
                    $number = $res['number'];
                }
            }
            $response = $number;
            $type = 'DB';
            $file = 'message.php';
            // $today = date("Y-m-d H:i:s");
            // $sql = "insert into system (user, date, url, request, response, file, type) values ('$userkey', '$today', '$url', '$request', '$response', '$file', '$type')";
            include "./system_insert.php";
            mysqli_query($con, $sql);
            include './api_test2.php';

            echo <<<EOD
            {
                "message":
                {
                    "text": "$summ"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기", "기사 원문 보기"]
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
            $sql = "select number from news where categorie=1 order by rand() limit 1";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                if ($res['number'] != null){
                    $number = $res['number'];
                }
            }
            include './api_test2.php';
            echo <<<EOD
            {
                "message":
                {
                    "text": "$summ"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기", "기사 원문 보기"]
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
            $sql = "select number from news where categorie=2 order by rand() limit 1";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                if ($res['number'] != null){
                    $number = $res['number'];
                }
            }
            include './api_test2.php';
            echo <<<EOD
            {
                "message":
                {
                    "text": "$summ"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기", "기사 원문 보기"]
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
            $sql = "select number from news where categorie=3 order by rand() limit 1";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                if ($res['number'] != null){
                    $number = $res['number'];
                }
            }
            include './api_test2.php';
            echo <<<EOD
            {
                "message":
                {
                    "text": "$summ"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기", "기사 원문 보기"]
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
            $sql = "select number from news where categorie=4 order by rand() limit 1";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                if ($res['number'] != null){
                    $number = $res['number'];
                }
            }
            include './api_test2.php';
            echo <<<EOD
            {
                "message":
                {
                    "text": "$summ"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기", "기사 원문 보기"]
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
            $sql = "select number from news where categorie=5 order by rand() limit 1";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                if ($res['number'] != null){
                    $number = $res['number'];
                }
            }
            include './api_test2.php';
            echo <<<EOD
            {
                "message":
                {
                    "text": "$summ"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기", "기사 원문 보기"]
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
        case "다른 뉴스":
            $sql = "select category from user where user_key='$userkey'";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                $num = $res['category'];
            }
            $sql = "select number from news where categorie=$num order by rand() limit 1";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                if ($res['number'] != null){
                    $number = $res['number'];
                }
            }
            include './api_test2.php';
            echo <<<EOD
            {
                "message":
                {
                    "text": "$summ"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기", "기사 원문 보기"]
                }
            }
EOD;
            break;
        case "질문하기":
            echo <<<EOD
            {
                "message":
                {
                    "text": "자유롭게 질문해주세요:)"
                },
                "keyboard":
                {
                    "type": "text"
                }
            }
EOD;
            break;
        case "기사 원문 보기":
            $sql = "select news from user where user_key='$userkey'";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                $num = $res['news'];
            }
            $sql = "select url from news where number=$num";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                $url = $res['url'];
            }
            $url = str_replace('amp;','',$url);
            $url = 'https://news.naver.com'.$url;
            echo <<<EOD
            {
                "message":
                {
                    "message_button": {
                        "label": "원문 기사 보러가기",
                        "url": "$url"
                      }
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기"]
                }
            }
EOD;
            break;
        default:
            $question = $content;
            $sql = "select news from user where user_key='$userkey'";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                $num = $res['news'];
            }
            $sql = "select script from news where number=$num";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                $context = $res['script'];
            }
            include './api_test.php';

            echo <<<EOD
            {
                "message":
                {
                    "text": "$answer"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기", "기사 원문 보기"]
                }
            }
EOD;
            break;
    }

    
?>