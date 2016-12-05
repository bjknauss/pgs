<?php
$name = $email = $message = $phone = $contact_pref = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	process();
}

function process(){
	$name = uinput($_POST["name"]);
	$email = uinput($_POST["email_address"]);
	$phone = uinput($_POST["phone_number"]);
	$contact_pref = uinput($_POST["contact_pref"]);
	$message = uinput($_POST["message"]);

	// Send Email
	$subject = "PGS - [" . $name . "]";
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
	$head = "From: " . $email . "\r\n" . 
		"Reply-To: " . $email . "\r\n" . 
		"X-Mailer: PHP/" . phpversion();
	@mail("petersgardenservice@gmail.com", $subject, $body, $head);
	header("Location: success.php");
}



// Make html input safe.
function uinput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>