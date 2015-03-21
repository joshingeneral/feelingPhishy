<?php
$logKey=$_GET['key'].$_POST['key'];
$salt="salt123";

//first round to get what was in the email
$cache=md5($salt.$logKey.$salt);
//second round to get what is on disk
$cacheMD5=md5($salt.$cache.$salt);
try
{
	echo "Email that clicked link, Email that viewed link,Script URL,IP Address, IP Address (Proxy), User Agent, Referral, Month Day, Year, Time <br>";
	//open file
	$myFile = "logs/$cacheMD5.txt";
	if ( !file_exists($myFile) ) {
        throw new Exception('File not found.');
    }
	$fh = fopen($myFile, 'r');
	$theData = fread($fh, filesize($myFile));
	fclose($fh);
	echo $theData;
}

catch ( Exception $e ) {
      // send error message if you can
	  echo "Could not find that log.";
    } 
?> 