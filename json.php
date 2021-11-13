<?php header("Content-Type: application/json"; charset=UTF-8"); 

$type = $_SERVER['REQUEST_METHOD']; 
$user_no = ""; $contents = ""; 

if($type == "GET") {
    $user_no = $_GET['user_no']; 
    $contents = $_GET['contents']; 
    echo(json_encode(array("mode" => $_REQUEST['mode'], "user_no" => $user_no, "contents" => $contents))); 
} 

else if($type == "POST") { 
    $user_no = $_POST['user_no']; 
    $contents = $_POST['contents']; 

    echo(json_encode(array("mode" => $_REQUEST['mode'], "user_no" => $user_no, "contents" => $contents))); 
    
?>


<?php
 
$chatlist_jsonlist = json_decode($_POST['chatlist'],true);     //POST로 받은 값을 json형식으로 decode
 
for($i = 0 ; $i < count($chatlist_jsonlist) ; $i++){

  //JSONArray에서 [$i] 번째 행의 JSONObject [' '] 항목의 값을 가져옴
  $member_nm = "'".$chatlist_jsonlist[$i]['member_nm']."'";
  $chatmsg = "'".$chatlist_jsonlist[$i]['chatmsg']."'";
  $msg_timestamp = "'".$chatlist_jsonlist[$i]['timestamp']."'";
 
  //테스트 출력
  echo $member_nm."/".$chatmsg."/".$msg_timestamp;
}