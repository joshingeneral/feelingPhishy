<html>
<head>
	<title>
	Feeling Phishy
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
         <br> This project allows system admins to run a spam campaign against their users, and view metrics in text or csv files (Version 1.2). 
         <br>
		 <br> All of the stats will be based on a md5 generated code in the form of parts of the message with the [link] or [image] tag.
		 <br>
         <br> - Multiple emails can be entered in the form of example1@domain.com,example2@domain.com
		 <br>
         <br> - [image] will allow logging to see when the user views the email if they have external images turned on. 
		 <br>
		 <br> - [link]CONTENT[/link] will provide
         a link to a page that you wish the user to go to. Later versions will include custom text on this page hidden in a base64 code. 
		 <br>
		 <br> - Date to Deliver Email will allow for sending email in the past or future, your mileage may very. Recommend testing before full deployment.
		 <br>
         <br> Results will be exported to:
         <a href='http://joshingeneral.com/feelingPhishy/log.csv'>CSV</a> | <a href='http://joshingeneral.com/feelingPhishy/log.txt'>Text</a>
         <br>
			Hope you enjoy, <br>
			JoshInGeneral 
	</td>
	<td>
		<!-- Doing this as POST because it is safer, noticed as a get no-script will flag as xss -->
		<form  id="resultsForm" method="POST" action="resultsTXTAPI.php">
			Enter Key Emailed to your Admin Account, or leave blank if no key specified:
				<br><input type="text" name="key" id="key" 	value="">
				<input id="button" name="button" type="submit" value="Send Mail" /> <br />
	    </form>
	</td>
	<td height="70%">
	</td>
	</tr>
	<tr>
	<td colspan="2" id="credits" name="credits">
		Ideas and main code designed by JoshInGeneral | parts contributed from <a href='https://www.flickr.com/photos/taylar/6491184167/'>https://www.flickr.com/photos/taylar/6491184167/</a> & <a href='http://jqueryui.com'>http://jqueryui.com</a>
		<br> Licensed under Creative Commons 2.0 <a href='https://creativecommons.org/licenses/by/2.0/'>https://creativecommons.org/licenses/by/2.0/</a>
	</td>
	</tr>
</table>

</body>
</html>
