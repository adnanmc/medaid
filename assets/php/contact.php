<?php
/*--------------------------------------------*/
/* Email Submited Form           */
/*--------------------------------------------*/

$post = (!empty($_POST)) ? true : false;

if($post){
    $to = "support@dueza.com"; // Your e-mail here
	$name = stripslashes($_POST['name']);
	$email = stripslashes($_POST['email']);
	$message = stripslashes($_POST['message']);
        $select_service = stripslashes($_POST['select_service']);
        $booking_date = stripslashes($_POST['booking_date']);
	$subject = "From Your Website";
	
	$mail = mail($to, $subject,
            "Name: ".$name."\r\n"	
            ."Email: ".$email."\r\n"
            ."Service: ".$select_service."\r\n"	
            ."Booking Date: ".$booking_date."\r\n"	
            ."Message: ".$message."\r\n"	
	    ."X-Mailer: PHP/" . phpversion());

	if($mail){
		echo '<p>Thank you for your Email! We will contact you very soon.</p>: '.$mail;
	}

}

?>
    <style type="text/css">
        p {
            text-align: center;
            font-size: 50px;
            background: #333;
            margin-top: 30px;
            padding: 20px;
            width: 500px;
            margin: 0 auto;
            color: #fff
        }
    </style>