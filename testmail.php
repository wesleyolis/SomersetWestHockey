<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>
<?php 
if(isset($errormsg))
{?>
<div style="border: 1px solid #FF5050; padding: 2px; background-color: #FF6666"><?php print $errormsg?></div>
<?php
}?>

<form  method="POST" name="Contact" action="mail.php">
	<p><input type="text" name="req_surname" size="20"></p>
	<p><textarea rows="2" name="texarea" cols="20"></textarea></p>
	<p><select size="1" name="List">
	<option value="test">test</option>
	<option value="test">test</option>
	</select></p>
	<p><input type="submit" value="Submit" name="B1"><input type="reset" value="Reset" name="B2"></p>
	<input type="hidden" name="form" value="testmail.php">
	<input type="hidden" name="redir" value="http://www.google.com">
	<input type="hidden" name="subject" value="contact">
	<input type="hidden" name="from" value="bob@devsworld.com">
</form>

</body>

</html>