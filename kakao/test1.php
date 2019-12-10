<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<?php 
include_once( './setting.php');
$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL, 'https://news.naver.com/'); 
// 헤더는 제외하고 content 만 받음
curl_setopt($ch, CURLOPT_HEADER, 0); 
// 응답 값을 브라우저에 표시하지 말고 값을 리턴
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
// 브라우저처럼 보이기 위해 user agent 사용
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 
//크롤링해온 내용 content 변수에 저장
$content = curl_exec($ch); 
//인코딩이 utf-8이 아닌경우에만 사용
$content = iconv('euc-kr','utf-8',$content);
$today = date("Y-m-d H:i:s");

//explode로 필요한 부분만 잘라서 사용
//explode('',$변수) -> ''을 기준으로 $변수 의 내용을 자르게 됨. ''기준으로 앞이 0번째 뒤가 1번째
$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">정치</h5>', $plan[1]);
$fix = $plan[1];

$plan = explode('"rank num1"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

$sql = "select * from news where url ='$plan[0]'";

$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 0)";
    mysqli_query($con, $sql);
}

//$rank_p = [];
//$rank_p[0] = $plan[0];



$plan = explode('"rank num2"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank[1] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 0)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num3"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[2] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";

$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 0)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num4"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[3] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 0)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num5"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[4] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 0)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num6"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[5] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 0)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num7"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[6] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 0)";
    mysqli_query($con, $sql);
}


$plan = explode('"rank num8"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[7] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 0)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num9"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[8] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 0)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num10"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_p[9] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 0)";
    mysqli_query($con, $sql);
}

//----------------------------------------------------------------


$plan = explode('<div class="section section_wide">', $content);
$plan = explode('<h5 class="blind">경제</h5>', $plan[1]);
$fix = $plan[1];

$plan = explode('"rank num1"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);


if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 1)";
    mysqli_query($con, $sql);
}

//$rank_e = [];
//$rank_e[0] = $plan[0];




$plan = explode('"rank num2"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[1] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num3"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[2] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 1)";
    mysqli_query($con, $sql);
}




$plan = explode('"rank num4"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[3] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num5"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[4] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num6"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[5] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 1)";
    mysqli_query($con, $sql);
}




$plan = explode('"rank num7"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[6] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num8"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[7] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num9"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[7] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 1)";
    mysqli_query($con, $sql);
}



$plan = explode('"rank num10"', $fix);
$plan = explode('<a href="', $plan[1]);
$plan = explode('" class=', $plan[1]);

//$rank_e[9] = $plan[0];

$sql = "select * from news where url ='$plan[0]'";
$result = mysqli_query($con, $sql);
$result = mysqli_num_rows($result);

if ($result){
}
else{
    $sql = "insert into news (url, date, categorie) values ('$plan[0]', '$today', 1)";
    mysqli_query($con, $sql);
}


$content = 	"<strong class="media_end_summary">10일 독도 헬기 추락사고 순직 소방대원 5명 영결식 참석</strong><span class="end_photo_org"><img src="https://imgnews.pstatic.net/image/005/2019/12/10/611111110014015670_1_20191210141302556.jpg?type=w647" alt="" /></span><br><br>문재인 대통령이 10일 오전 대구 계명대 체육관을 찾아 지난 10월 31일 독도 해역 헬기 추락사고로 순직한 소방항공대원 5명의 합동영결식에 참석했다.<br><br>검은 정장 차림으로 계명대에 도착한 문 대통령은 진영 행정안전부 장관과 함께 영결식장에 입장했다. 문 대통령은 유가족 자리에 가서 허리를 굽혀 인사한 후 착석했다.<br><span class="end_photo_org"><img src="https://imgnews.pstatic.net/image/005/2019/12/10/611111110014015670_2_20191210141302572.jpg?type=w647" alt="" /></span><br><br>영현이 운구돼 영결식장에 들어서자 문 대통령은 자리에서 일어나 굳은 표정으로 운구 행렬을 지켜봤다. 문 대통령은 운구 행렬을 따라 들어오는 유가족들을 일일이 다독이며 위로했다. 유가족들은 애통해하며 눈물을 흘렸다.<br><br>국민의례에 이어 정문호 소방청장이 김종필 기장과 이종후 부기장, 서정용 항공 정비검사관에게 공로장을 봉정했고, 배혁 구조대원과 박단비 구급대원에게는 1계급 특진을 추서했다.<br><span class="end_photo_org"><img src="https://imgnews.pstatic.net/image/005/2019/12/10/611111110014015670_3_20191210141302593.jpg?type=w647" alt="" /></span><br><br>이어 문 대통령은 흰 장갑을 끼고 제단 중앙으로 이동해 묵례한 후 순직대원들에게 훈장을 추서했다. 문 대통령은 침통한 표정으로 추도사를 읽어 내려갔다. 문 대통령은 “저는 오늘 용감했던 다섯 대원의 숭고한 정신을 국민과 함께 영원히 기리고자 한다”면서 “비통함과 슬픔으로 가슴이 무너졌을 가족들께 깊은 애도의 말씀을 드린다”고 말했다.<br><br><span class="end_photo_org"><img src="https://imgnews.pstatic.net/image/005/2019/12/10/611111110014015670_4_20191210141302610.jpg?type=w647" alt="" /></span><br><br>문 대통령은 순직대원의 이름을 일일이 호명하며 추모했다. 특히 이종후 부기장을 소개하면서 “둘째 아들을 먼저 잃은 아버지와 어머니에게 너무나 귀한 아들이었다”라고 말할 때는 감정이 북받친 듯 잠시 목이 메는 모습이었다.<br><br>추도사를 마친 문 대통령은 유가족이 헌화·분향한 후 다시 제단 앞에 나와 헌화·분향했다. 문 대통령은 유가족이 앉은 쪽으로 이동해 한 명 한 명의 손을 일일이 잡아주며 위로의 뜻을 전했다. 특히 어린 유가족 앞에는 무릎을 꿇고 앉아 눈높이를 맞춰 손을 꼭 잡았다. 뒤편에 있던 한 유족이 앞에 나와 무언가를 얘기하자 잠시 귀를 기울여 경청했다. 헌화·분향이 끝나고 영현 운구행렬이 퇴장하자 문 대통령은 묵례로 끝까지 예를 다했다.<br><br><span class="end_photo_org"><img src="https://imgnews.pstatic.net/image/005/2019/12/10/611111110014015670_5_20191210141302634.jpg?type=w647" alt="" /></span><br><br>문 대통령은 황교안 자유한국당 대표 등과 악수한 뒤 순직대원 구조 및 수색활동에 참여한 해경과 해군 장병들을 격려하고 행사장을 떠났다.<br><br>사고는 지난 10월 31일 응급환자를 태운 중앙119구조본부 소속 EC225 헬기 한 대가 독도에서 이륙 직후 인근 바다로 추락하며 발생했다. 소방항공대원 5명과 조업 중 손가락이 절단된 선원 A씨(50), 또 다른 선원 B씨(46)까지 7명이 헬기에 타고 있었다.<br><br><span class="end_photo_org"><img src="https://imgnews.pstatic.net/image/005/2019/12/10/611111110014015670_6_20191210141302642.jpg?type=w647" alt="" /></span><br><br>수색 당국은 지금까지 해군·해경 함선 및 어선 등을 하루 최대 49척까지 투입해 수중·해상 수색을 벌였다. 실종자 7명 가운데 이종후 부기장, 서정용 항공장비검사관, 박단비 구급대원, 선원 A씨 등 4명의 시신을 수습했으나 김종필(46) 기장과 배혁(31) 구조대원, 선원 B씨 등 3명은 끝내 발견하지 못했다.<br><br><b>[문재인 대통령 추도사 전문]</b><br>유가족 여러분, 국민 여러분, 우리는 오늘 다섯 분의 영웅과 작별합니다.<br>사랑하는 아들이었고, 딸이었고, 아버지였고, 남편이었고, 누구보다 믿음직한 소방대원이었으며 친구였던, 김종필, 서정용, 이종후, 배혁, 박단비 다섯 분의 이름을 우리 가슴에 단단히 새길 시간이 되었습니다.<br><br>10월 31일, 다섯 대원은 어두운 밤, 멀리 바다 건너 우리땅 동쪽 끝에서 구조를 기다리는 국민을 위해 한 치 망설임 없이 임무에 나섰습니다. 국민의 생명을 구하는 소명감으로, 어떤 어려움도 헤쳐 나갈 수 있도록 훈련받고, 동료애로 뭉친 다섯 대원은 신속한 응급처치로 위기를 넘겼습니다.<br><br>그러나 우리의 영웅들은 그날 밤 우리 곁으로 돌아오지 못했습니다. 무사 귀환의 임무를 남겨놓은 채 거친 바다 깊이 잠들고 말았습니다. 저는 오늘 용감했던 다섯 대원의 숭고한 정신을 국민과 함께 영원히 기리고자 합니다. 또한 언제 겪을지 모를 위험을 안고 묵묵히 헌신하는 전국의 모든 소방관들과 함께 슬픔과 위로를 나누고자 합니다. 비통함과 슬픔으로 가슴이 무너졌을 가족들께 깊은 애도의 말씀을 드리며, 동료를 가족의 품으로 돌려보내기 위해 끝까지 최선을 다한 소방 잠수사들, 해군과 해경 대원들의 노고에도 감사와 격려의 말씀을 전합니다.<br><br>유가족 여러분, 국민 여러분, 국민들은 재난에서 안전할 권리, 위험에서 보호받을 권리가 있습니다. 국가는 국민의 생명과 안전을 지키기 위해 존재하며, 소방관들은 재난현장에서 구조를 기다리는 국민들에게 국가 그 자체입니다. 국민들은 119를 부를 수만 있다면 언제 어디서든 구조될 수 있다고 믿습니다. 고인들은 국가를 대표해 그 믿음에 부응했습니다.<br><br>김종필 기장은 20년 경력의 베테랑 조종사입니다. 끊임없이 역량을 기르면서 주위 사람들까지 알뜰히 챙기는 듬직한 동료였고, 세 아이의 자랑스러운 아버지였습니다.<br><br>서정용 검사관은 국내 최고의 대형헬기 검사관입니다. 후배들에게 경험과 지식을 아낌없이 나눠주는 탁월한 선임이었고, 아들과 딸을 사랑하는 따뜻한 가장이었습니다.<br><br>이종후 부기장은 ‘닥터헬기’ 조종 경험을 가진 믿음직한 조종사이자, 동료들을 세심하게 챙기는 ‘항공팀 살림꾼’이었습니다. 더욱 안타까운 것은, 둘째 아들을 먼저 잃은 아버지와 어머니에게 너무나 귀한 아들이었습니다.<br><br>이곳 계명대를 졸업한 배혁 구조대원은 결혼한 지 갓 두 달 된 새신랑입니다. 해군 해난구조대원으로 활약한 경력으로 소방관이 되어, 지난 5월, 헝가리 유람선 침몰사고 현장에 파견돼 힘든 수중 수색 업무에 투입됐던 유능하고 헌신적인 구조대원이었습니다.<br><br>박단비 구급대원은 늘 밝게 웃던 1년 차 새내기 구급대원이었습니다. 쉬는 날 집에서도 훈련을 계속하면서, 만약 자신이 세상에 진 빚이 있다면 국민의 생명을 구하는 것으로 갚겠다고 했던 진정한 소방관이었습니다.<br><br>다섯 분 모두 자신의 삶과 일에 충실했고 가족과 동료들에게 커다란 사랑을 주었습니다. 언제나 최선을 다한 헌신이 생사의 기로에 선 국민의 손을 잡아준 힘이 되었습니다. 다섯 분의 헌신과 희생에 깊은 존경의 마음을 바치며, 다급하고 간절한 국민의 부름에 가장 앞장섰던 고인들처럼 국민의 안전에 대해 대통령으로서 무한한 책임감을 가지겠습니다. 또한 소방관들의 안전과 행복을 지키는 것 역시 국가의 몫임을 잊지 않겠습니다.<br><br>국민 여러분, 소방관 여러분, 모든 소방가족들의 염원이었던 소방관 국가직 전환 법률이 마침내 공포되었습니다. 오늘 다섯 분의 영정 앞에서 국가가 소방관들의 건강과 안전, 자부심과 긍지를 더욱 확고하게 지키겠다고 약속드립니다.<br><br>이제 우리는 안전한 대한민국의 이름으로 다섯 분의 헌신과 희생을 기려야 할 것입니다. 이번 사고의 원인을 철저히 규명하고, 소방헬기의 관리운영을 전국단위로 통합해 소방의 질을 높이면서 소방관들의 안전도 더 굳게 다지겠습니다.<br><br>다섯 분의 희생이 영원히 빛나도록 보훈에도 힘쓰겠습니다. 가족들이 슬픔을 딛고 일어서 소방가족이었음을 자랑스럽게 여길 수 있도록 국가의 책임을 다하겠습니다. 국민을 위한 다섯 소방항공대원의 삶은 우리 영토의 동쪽 끝 독도에서 영원할 것입니다.<br><br>아침 해가 뜰 때마다 우리 가슴에 생명의 소중함을 되새겨 줄 것입니다. 이제 故 김종필, 故 서정용, 故 이종후, 故 배혁, 故 박단비 님을 떠나보냅니다. 같은 사고로 함께 희생된 故 윤영호 님과 故 박기동 님의 유가족들께도 깊은 위로의 말씀을 드립니다. 일곱 분 모두의 영원한 안식을 기원합니다.<br><br>2019년 12월 10일<br>대한민국 대통령 문재인<br><br>권기석 기자 keys@kmib.co.kr<br><br><b><a href="http://naver.me/GxmvUNz3" target="_blank"><font color="f98b10">[국민일보 채널 구독하기]</font></a></b><br><b><a href="https://m.post.naver.com/my.nhn?memberNo=12282441" target="_blank"><font color="f98b10">[취향저격 뉴스는 여기]</font></a> <a href="https://www.youtube.com/channel/UCb-AbqZutk9nTlJLZRcBinw" target="_blank"><font color="f98b10">[의뢰하세요 취재대행소 왱]</font></a></b><br><br>GoodNews paper ⓒ <a href="http://www.kmib.co.kr" target="_blank">국민일보(www.kmib.co.kr)</a>, 무단전재 및 재배포금지"
if(strpos($test[1],"[국민일보 채널 구독하기]")){
    $text = explode('[국민일보 채널 구독하기]', $text[1]);
    $text = $text[0];
    echo "국민일보";
}



curl_close($ch);

?>
