<?php
require_once("mailer/PHPMailerAutoload.php");
// ini file containing username/password keys for Mailer to use.
$cfg = parse_ini_file("mailer.ini");


$name = $email = $message = $phone = $contact_pref = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	process();
}

function process(){
	$cfg = parse_ini_file("mailer.ini");
	$name = uinput($_POST["name"]);
	$email = uinput($_POST["email_address"]);
	$phone = uinput($_POST["phone_number"]);
	$contact_pref = uinput($_POST["contact_pref"]);
	$message = uinput($_POST["message"]);
	$body = "Name: " . $name . "\n";
	$body .= "Email: " . $email . "\n";
	$body .= "Phone Number: " . $phone . "\n";
	$body .= "Preferred Contact Method: ";
	if($contact_pref == "either"){
		$body .= "Phone or Email";
	} elseif ($contact_pref == "email" || $contact_pref == "phone"){
		$body .= $contact_pref;
	}else{
		$body .= "Error.";
	}
	$body .= "\n";
	$body .= "Message:\n";
	$body .= $message;

	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

    $mail->IsHTML(false);
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6
	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;
	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = $cfg["email"];
	//Password to use for SMTP authentication
	$mail->Password = $cfg["password"];
	//Set who the message is to be sent from
	$mail->setFrom($cfg["email"]);
	//Set an alternative reply-to address
	$mail->addReplyTo($email);
	//Set who the message is to be sent to
	$mail->addAddress($cfg["email"]);
	//Set the subject line
	$mail->Subject = "PGS - ". $name;
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->Body = $body;
	//send the message, check for errors
	if (!$mail->send()) {
	    header("Location: failure.php");
	} else {
	    header("Location: success.php");

	}
}

// Make html input safe.
function uinput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>