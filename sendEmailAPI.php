<html>
<head>
	<title>
	Feeling Phishy - sendEmail Script
	</title>
		<link rel="stylesheet" href="style.css">
</head>
<body>
	<table id="leftShark" width="800" align="center">
	<tr>
	<td>
	<h3> Full Report</h3>
	</td>
	<tr>
	<?php
		//salt used for md5 hashing to hide logs. 
		$salt="salt123";

		//Get basic information for output here
		$senderIPAddress = $_POST['ip'];
		$httpDomain = $_SERVER['HTTP_HOST'];
		$httpagent = $_POST['httpagent'];
		// Use this to change the location or path of where the image.php file is located
		$directory = "";
		$path = "$httpDomain$directory";
		//Get varables here, doing POST for input from form, GET is for additional tools that want to use the API.
		$fromName = $_POST['fromName'].$_GET['fromName'];
		$fromEmail = $_POST['fromEmail'].$_GET['fromEmail'];
		$toEmail = $_POST['toEmail'].$_GET['toEmail'];
		$content = $_POST['content'].$_GET['content'];
		$sendDate = $_POST['sendDate'].$_GET['sendDate']." ".$_POST['sendTime'].$_GET['sendTime'];
		$sendSubject=$_POST['sendSubject'].$_GET['sendSubject'];
		$landingPageError = $_POST['landingPageError'].$_GET['landingPageError'];
		$logKey=$_POST['logKey'].$_GET['logKey'];
		$adminEmail=$_POST['adminEmail'].$_GET['adminEmail'];
		echo "error:$landingPageError";
		#Error Checking
		function Error($errorType) {
			echo "There was an error with $errorType .<br>";
			die ("<a href=\"index.php\"> Try again </a> <br />");
		}

		if(!$fromEmail == "" && (!strstr($fromEmail,"@") || !strstr($fromEmail,"."))) {
			Error("the from email not being formatted correctly");
			die ("<a href=\"index.php\"> Try again </a> <br />");
		}
		if(!$toEmail == "" && (!strstr($toEmail,"@") || !strstr($toEmail,"."))) {
			Error("the sender email not being formatted correctly");
			die ("<a href=\"index.php\"> Try again </a> <br />");
		}

		if(empty($fromName) || empty($fromEmail) || empty($content)) {
			Error("a field being empty");
		}
		if(!$$logKey == "" && (!strstr($$logKey,"@") || !strstr($$logKey,"."))) {
			
		}
		else
		{
			$cacheMD5=md5($salt.$logKey.$salt);
			$cache="&cache=$cacheMD5";
		}
		
		//date to show for this page
		$todayis = date("l, F j, Y, g:i a") ;

		//send message to admin so they have their key
		sendmsg($adminEmail,"Your Admin Key","","","Your email key is: $logKey<br> You can access results at: <a href='http://$httpDomain/results.php'>http://$httpDomain/results.php</a>","","System","admin@$httpDomain","$todayis","","");

		//We do this to fix the way POST requests send quotes
		$message = str_replace("\\\"","\"",$content);
		$message = str_replace("\\\'","\'",$message);

		
		//For the function to work, you must pass all the varibles that are needed
		function sendmsg($toEmail,$sendSubject,$httpDomain,$path,$message,$content,$fromName,$fromEmail,$sendDate,$landingPageError,$cache) {
		// get the md5 to mask the email
		$md5sum = md5($toEmail);
		// replace the links commands with the right link to catch the click, tagged with md5 of email
		$message = str_replace("[link]","<a href=\"http://$path/image.php?e=$landingPageError&a=$md5sum"."$cache\">",$message);
		$message = str_replace("[/link]","</a>",$message);
		// replace image placeholder with correct url to collect information, tagged with md5 of email
		$message = str_replace("[image]","<img src=\"http://$path/image.php?e=$landingPageError&img=$md5sum"."$cache\">",$message);
		$message = str_replace("/sendEmail.php","",$message);

// This builds the headers to trick the client into think it was sent at a different date
$headers .= "Delivery-date: $sendDate
Received: from localhost ([127.0.0.1] helo=example.com)
	by example.com with esmtp (Exim 4.69)
	(envelope-from <example@server.com>)
	id 1PVKNu-00033s-2Z
	for $toEmail; $sendDate
". "From: $fromEmail\r\n" . "Date: $sendDate\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		// send the mail
		// headers will build the from and date fields
		mail($toEmail, $sendSubject, $message, $headers);

		// output simple results to the user
		echo "<tr><td id=\"leftShark\">";
		echo "We just sent the following:";
		echo "<br> Headers:<br> $headers \n";
		echo "<p></p>";
		echo "<br> From: $fromEmail\n";
		echo "<br> To: $toEmail\n";
		echo "<br> Message:  $content \n";
		echo "<br> message sent";
		echo "<p></p>";
		echo "</td></tr>";
		}

	#sendmsg($toEmail,$sendSubject,$httpDomain,$path,$message,$content,$fromName,$fromEmail,$sendDate);
	#$sendToEmails="josh2@joshingeneral.com,josh3@joshingeneral.com";
	#echo "$sendToEmails";
	$emailArray = explode(',', $toEmail);
	foreach ($emailArray as $email){
		echo "<tr><td>";
		echo "<br> Email Sent To: $email";
		echo "</td></tr>";
		sendmsg($email,$sendSubject,$httpDomain,$path,$message,$content,$fromName,$fromEmail,$sendDate,$landingPageError,$cache);
	}
?>
</tr>
<tr>
<td>
  <a href="index.php"> Home </a> <br />
  Click / View Results: <a href="results.php">Results </a> 
</td>
</tr>
</table>
</body>
</html>