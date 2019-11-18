<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $userkey = $data["user_key"];
    $content = $data["content"];

    $_POST["userkey"] = $userkey;
    include './grade_point_count.php';

    $con = mysqli_connect(
        '18.224.229.40',
        'admin',
        'admin',
        'sys',
        '3306'
    );

    switch($content)
    {
        case "총 이수 학점":
            echo <<<EOD
            {
                "message":
                {
                    "text": "당신의 이수 학점은 $total_point $total_score $r $p 입니다."
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["학점", "도서관", "공지"]
                }
            }
EOD;
            
            break;
        case "학점 계산":
            echo <<<EOD
            {
                "message":
                {
                    "text": "당신의 학점은 $score 입니다."
                },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons": ["학점", "도서관", "공지"]
                }
            }
EOD;
            
            break;
 
        case "학점 기록":
            echo <<<EOD
                {
                    "message":
                    {
                        "message_button": 
                        {
                            "label": "기록하러 가기",
                            "url": "http://ec2-18-224-229-40.us-east-2.compute.amazonaws.com/php_project/kakao/grade_form.php?user=$userkey"
                        }
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["학점", "도서관", "공지"]
                    }
                }
EOD;
            break;
 
        case "학점":
            echo '
                {
                    "message":
                    {
                        "text": "원하는 메뉴를 선택해주세요."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["학점 기록", "학점 계산", "총 이수 학점"]
                    }
                }';
            break;
 
        default:
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