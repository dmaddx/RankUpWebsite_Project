<html>
<body>
<?php
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$comm=$_POST['comment'];
echo "</h1>" . "Information Received" . "</h1><br>";
echo "First Name: " . $firstname. "<br>";
echo "Last Name: " . $lastname. "<br>";
echo "Phone: " . $phone. "<br>";
echo "email: " . $email. "<br>";
echo "Comments: " . $comm. "<br>";
echo "Thank you for the info." . "<br>";

$message="\n" . "First Name: " . $firstname . "\n" . 
		"Last Name: " . $lastname . "\n" .
		"Phone: " .$phone . "\n" .
		"E-mail: " . $email . "\n" . 
		"Comments: " . $comm . "\n" . 
		"-------------------------------------------------" . "\n"
;

$file="data.txt";
$fp=fopen($file,"a");
fwrite($fp, $message);
fclose($fp);
echo "Saved to $file !!!";

$to = "skirvidr@mail.uc.edu";
$email_subject = "$firstname $lastername: Rank Up contact";
$email_body = "Name: $firstname $lastname \n".
			  "Phone Number: $phone \n".
			  "Email Address: $email \n".
			  "Comments: $comm";
mail($to,$email_subject,$email_body);


?>
</body>
</html>