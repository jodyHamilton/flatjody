<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="flatjody.css" rel="stylesheet" type="text/css"><base href="news.html">
<link href="text_email_radio.css" rel="stylesheet" type="text/css"><base href="file:///Macintosh%20HD/Users/jodyhamilton/website/flatjody/new%20site/news.html"></head><body>
</head>

<body>
<?php 

  $toaddress = "jody@riflenice.com" ;
  $subject = "Message from Flatjody.com";
  $name =$_POST["name"];
  $message=$_POST["message"];
  $email = $_POST["email"];
  $from= "From: ".$name."<".$email."> \r\n";
mail($toaddress, $subject, $message, $from);

echo "Message sent";

?>
<br>
<form action="email.php" method="post">
Send e-mail to <a href="mailto:jody@riflenice.com">jody@riflenice.com</a><br />
<textarea name="message" class="message" rows="6" columns="20">or type here.</textarea>
<input type="text" name="name" class="name" value="Your name" />
<input type="text" name="email" class="email" value="Your e-mail" />
<input type=submit class="submit" value="Send" />



</form>



</body>
</html>
