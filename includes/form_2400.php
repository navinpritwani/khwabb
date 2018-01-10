<?php	
	if(empty($_POST['input_756']) && strlen($_POST['input_756']) == 0)
	{
		return false;
	}
	
	$input_756 = $_POST['input_756'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Input_756: $input_756 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_756";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>