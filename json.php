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
