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
            $sql = "SELECT userkey from user";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $row = $row['userkey'];
            echo <<<EOD
                {
                    "message":
                    {
                        "text": "$userkey"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["가입", "기록", "확인"]
                    }
                }
EOD;
            break;
 
        case "메뉴2":
            echo '
                {
                    "message":
                    {
                        "text": "메뉴2를 선택하셨습니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3"]
                    }
                }';
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
            echo '
                {
                    "message":
                    {
                        "text": "잘못된 벨류입니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3"]
                    }
                }';
            break;
    }
?>