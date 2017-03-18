<?php
    require('jwt.php');
    require('tojson.php');

  
    if(isset($_GET['username']) && $_GET['password']) {
        $username = $_GET['username'];
        $password = $_GET['password'];    
        if($username == 'pho' && $password == '123'){
            $token = array();
            $token['username'] = $username;
            $jsonwebtoken = JWT::encode($token, 'secret_qqddfdfqqservdgfgger_key');
            echo JsonHelper::getJson('token', $jsonwebtoken);
        }
    } else{
        echo 'LOI';
    }
?>