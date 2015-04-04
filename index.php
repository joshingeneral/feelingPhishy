<html>
<head>
	<title>
	Feeling Phishy - Home (Version 1.4)
	</title>
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- jquery Stylesheets for calendar module -->
	<link rel="stylesheet" href="jquery/jquery-ui.css">
	<link rel="stylesheet" href="jquery/style.css">	
	<!-- jquery JavaScript for calendar module -->
	<script src="jquery/jquery-1.10.2.js"></script>
	<script src="jquery/jquery-ui.js"></script>
	<!-- Path to CKEditor. -->
    <script src="ckeditor/ckeditor.js"></script>

	<!-- Time Format JavaScript for calendar module --> 
	<script>
		$(function() {
		$( "#sendDate" ).datepicker();
		$( "#sendDate" ).change(function() {
		$( "#sendDate" ).datepicker( "option", "dateFormat", "D, d M yy" );
		});
		});
	</script>
</head>

<table>
    <tr>
    <td id="leftShark">
		<img width="460" src="images/6491184167_2eb38dd07d_b.jpg">
         <br> This project allows system admins to run a spam campaign against their users, and view metrics. (Version 1.4). 
         <br>
		 <br> All of the stats will be based on a md5 generated code in the form of parts of the message with the [link] or [image] tag.
		 <br>
         <br> - Multiple emails can be entered in the form of example1@domain.com,example2@domain.com
		 <br>
         <br> - [image] will allow logging to see when the user views the email if they have external images turned on. 
		 <br>		
         <br> - [url] will insert a specially crafted URL without any tags. 
		 <br>
		 <br>		
         <br> - [email] will allow you to insert the email of each receiver. 
		 <br>
		 <br> - [link]CONTENT[/link] will provide a link to the specially crafted page to log user clicks.
		 <br>
		 <br> - Date to deliver email will allow for sending email in the past or future, your mileage may very. Recommend testing before full deployment.
		 <br>
		 <br> - Templates can be found by clicking the icon next to source, add more by editing: /ckeditor/plugins/templates/templates/defaults.js 
		 <br>
		 <br> - Use the image icon on the right to upload a image in Base64.
		 <br>
		 <br> Results will be exported to:
         <a href='results.php'>CSV</a> | Source Code found here: <a href='https://github.com/joshingeneral/feelingPhishy'>https://github.com/joshingeneral/feelingPhishy</a>
         <br>
			Hope you enjoy, <br>
			JoshInGeneral 
	</td>
	<td>
		<!-- Doing this as POST because it is safer, noticed as a get no-script will flag as xss -->
		<form method="POST" action="sendEmailAPI.php">
			Email Name (From):
				<br><input type="text" name="fromName" id="fromName" 	value="Mr. Smith">
			Email Address (From):
				<br><input type="text" name="fromEmail" id="fromEmail" 	value="smith@hardware.com">
			Send to:
				<br><input type="text" name="toEmail" id="toEmail">
			With Subject:
				<br><input type="text" name="sendSubject" id="sendSubject"  value="Important message">
			Date to Deliver Email:
				<br><input type="text" id="sendDate" name="sendDate" value="Fri, 4 Apr 2015">
			Time to Deliver Email:
				<br><input type="text" id="sendTime" name="sendTime" value="00:00:00 -0700">
			Error to Display: 
				<br> <select id="landingPageError" name="landingPageError">
						<option value="1">Apache Error - 404</option>
						<option value="2">Apache Error - 403</option>
					 </select>
				<br>
			Admin Email (optional)
				<br><input width="10" type="text" id="adminEmail" name="adminEmail" value="">
			Passphrase for log file (optional)
				<br><input width="10" type="text" id="logKey" name="logKey" value="">
			Mail Message: 
				<br><textarea name="content" id="content">Testing out [link]this[/link] and image tag [image]
V/r,
INSERTNAME
				</textarea> 
				<script>
					CKEDITOR.replace( 'content' );
				</script>
			<input id="button" name="button" type="submit" value="Send Mail" /> <br />
	    </form>
	</td>
	</tr>
	<tr>
	<td colspan="2" id="credits" name="credits">
		Ideas and main code designed by JoshInGeneral, by using this site you agree to hold him and his affiliates not liable for any content sent or use there of | parts contributed from <a href='https://www.flickr.com/photos/taylar/6491184167/'>https://www.flickr.com/photos/taylar/6491184167/</a>, <a href='http://jqueryui.com'>http://jqueryui.com</a> & <a href='http://ckeditor.com'>http://ckeditor.com</a>
		<br> Licensed under the MIT Licensing standard <a href='http://choosealicense.com/licenses/mit'>http://choosealicense.com/licenses/mit</a>
	</td>
	</tr>
</table>

</body>
</html>
