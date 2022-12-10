<?php
    include_once 'db_connection.php';

    $phone = $_POST['userPhone'];

    function get_user_ip() {
        $client = $_SERVER['HTTP_CLIENT_IP'];
        $forward = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        // if user from the share internet  
        if(!empty($client)) {  
            $ip = $client; 
        }  
        //if user is from the proxy  
        elseif (!empty($forward)) {  
            $ip = $forward;
        }  
        //if user is from the remote address  
        else {  
            $ip = $remote;
        }
        return $ip;
    }
    
    $user_ip = get_user_ip();

    $sql = "INSERT INTO client_records (client_ip_address) VALUES ('$user_ip');";
    mysqli_query($conn, $sql);

    header("Location: skype:arnis296?call");
