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
            $num=0;
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
            $num=1;
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
            $num=2;
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
            $num=3;
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
            $num=4;
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
            $num=5;
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
        case "다른 뉴스":
            $sql = "select category from user where user_key='$userkey'";
            $result = mysqli_query($con, $sql);
            foreach($result as $res){
                $num = $res['category'];
            }
            // include './api_test2.php';
            echo <<<EOD
            {
                "message":
                {
                    "text": "$num"
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["카테고리 재선택", "다른 뉴스", "질문하기"]
                }
            }
EOD;
            break;
    }

    
?>