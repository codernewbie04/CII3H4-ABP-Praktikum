<?php
if((isset($_POST["username"]) && isset($_POST["password"])) && ($_POST["username"] != "" && $_POST["password"] != "")){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'akmal' && $password == '1301204188'){
        http_response_code(200);
        $response = array(
            'status' => 'success',
            'message' => 'Login success',
        );
    } else {
        http_response_code(401);
        $response = array(
            'status' => 'error',
            'message' => 'Username or password is wrong!',
        );
    }
}else{
    http_response_code(400);
    $response = array(
        'status' => 'error',
        'message' => 'Username or password is required!',
    );

}
header("Content-Type: application/json");
echo json_encode($response);