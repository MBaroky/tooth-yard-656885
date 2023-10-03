<?php
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$englishMessages = array(
"SUBMIT_SUCCESSFULLY"=>"<div id=sentMailSuc class=sentMailSuc>Your request has been sent. Please expect a call shortly from one of our Media Consultants.</div>#contact-form-wrapper",
"SUBMIT_FAILED"=>"Failed#contact-form-wrapper",
);
$arabicMessages = array(
"SUBMIT_SUCCESSFULLY"=>"<div id=sentMailSuc class=sentMailSuc>شكراً لإهتمامك، احد مندوبينا سيقوم بالإتصال بك قريباً.</div>#contact-form-wrapper",
"SUBMIT_FAILED"=>"لم ينجح الارسال#contact-form-wrapper",
);

if (!isset($_REQUEST['lang']) || $_REQUEST['lang'] == 'english'){
	$allMessages = $englishMessages;
}else if (@$_REQUEST['lang'] == 'arabic'){
	$allMessages = $arabicMessages;
}

if ( isset($_REQUEST['formRequesterFirstName']) && $_REQUEST['formRequesterFirstName'] != ''){
	//Email to send to address

	 $to = "";
	 	 $bcc = "";


	 $subject="From Website ";

	/**/


	//First Name Subject
	$firstname = htmlspecialchars(@$_REQUEST['formRequesterFirstName'], ENT_QUOTES);

	//Mobile from address
	$mobile = htmlspecialchars(@$_REQUEST['formRequesterMobile'], ENT_QUOTES);


	//Email
	$from = htmlspecialchars(@$_REQUEST['formRequesterEmail'], ENT_QUOTES);




	//message
	$message = htmlspecialchars(@$_REQUEST['formRequesterMessage'], ENT_QUOTES);




	$emailContent = file_get_contents('form.html');


	$emailContent = preg_replace('/-##FIRSTNAME##-/',$firstname,$emailContent);

	$emailContent = preg_replace('/-##MOBILE##-/',$mobile,$emailContent);

	$emailContent = preg_replace('/-##EMAIL##-/',$from,$emailContent);

	$emailContent = preg_replace('/-##MESSAGE##-/',$message,$emailContent);




	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";


	// Additional headers
	$headers .= 'To: <'.$to.'>' . "\r\n";
	$headers .= "From:" . $from . "\r\n";
	$headers .= 'Bcc: ' . $bcc . "\r\n";



	if ( @mail($to,$subject,$emailContent,$headers) ){
		$endFormMessage = $allMessages['SUBMIT_SUCCESSFULLY'];
	} else {
		//$endFormMessage = $allMessages['SUBMIT_FAILED'];
		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->SMTPDebug = 0;
		$mail->Host = 'smtpout.secureserver.net';                       // Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = '';          // SMTP username
		$mail->Password = '';               	// SMTP password
		//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail->Port = 80;                                    //Set the SMTP port number - 587 for authenticated TLS
		$mail->setFrom('', '');     //Set who the message is to be sent from
		$mail->addAddress($to, '');  // Add a recipient
		$mail->addBCC($bcc);
		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

		$mail->Subject = $subject;
		$mail->Body    = $emailContent;

		if(!$mail->send()) {
		   $endFormMessage = $allMessages['SUBMIT_FAILED'];
		   //echo $mail->ErrorInfo;
		   exit;
		}
		else {
			$endFormMessage = $allMessages['SUBMIT_SUCCESSFULLY'];
		}
	}
	//with message in URL
	$HTTP_REFERER = $_SERVER['HTTP_REFERER'];
	$HTTP_REFERER = explode('?',$HTTP_REFERER);
	$HTTP_REFERER = $HTTP_REFERER[0];
	header( 'Location: '.$HTTP_REFERER.'?endFormMessage='.$endFormMessage );
}