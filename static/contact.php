<?php
    $contactName = $_POST['contactName'];
    $contactEmail = $_POST['contactEmail'];
    $message = $_POST['message'];
    $from = 'From: whiterosetattoosupply.com'; 
    $to = 'matthew.j.monaghan@vanderbilt.edu'; 
    $subject = 'Contact us';
    $human = $_POST['human'];
			
    $body = "From: $contactName\n E-Mail: $contactEmail\n Message:\n $message";
				
    if ($_POST['contactSubmit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['contactSubmit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>