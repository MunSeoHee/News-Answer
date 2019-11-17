<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $userkey = $data["user_key"];
    $content = $data["content"];

    $con = mysqli_connect(
        '18.224.229.40',
        'admin',
        'admin',
        'sys',
        '3306'
    );

    switch($content)
    {
        case "가입":
            $sql = "SELECT userkey from user where userkey='$userkey'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            if($row['userkey'] == ''){
                echo <<<EOD
                {
                    "message":
                    {
                        "text": "가입을 위해 비밀번호를 입력해주세요."
                    },
                    "keyboard":
                    {
                        "type": "text"
                    }
                }
EOD;
            }
            else{
                echo <<<EOD
                {
                    "message":
                    {
                        "text": "이미 가입이 되어있습니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["가입", "기록", "확인"]
                    }
                }
EOD;
            }
            
            break;
 
        case "기록":
            echo <<<EOD
                {
                    "message":
                    {
                        "message_button": 
                        {
                            "label": "기록하러 가기",
                            "url": "http://ec2-18-224-229-40.us-east-2.compute.amazonaws.com/php_project/kakao/add.php?user='$userkey'"
                        }
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["가입", "기록", "확인"]
                    }
                }
EOD;
            break;
 
        case "메뉴3":
            echo '
                {
                    "message":
                    {
                        "text": "메뉴3을 선택하셨습니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3"]
                    }
                }';
            break;
 
        default:
            $sql = "insert into user (userkey, pw) values ('$userkey', '$content')";
            mysqli_query($con, $sql);
            mysqli_close($con);

            echo '
                {
                    "message":
                    {
                        "text": "회원가입 완료"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["가입", "기록", "확인"]
                    }
                }';
            break;
    }

    
?>