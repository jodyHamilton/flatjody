<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Rifle Nice</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="riflenice.css" rel="stylesheet" type="text/css" />

</head>

<body>


<img src="images/menu.jpg"  
usemap="#menumap" />

<map id="menumap" name="menumap">

<area shape="poly" 
coords="54,3, 263,11,262,90,54,93" 
alt="Rifle Nice"
href="news.html" target="frame" />

<area shape="poly" 
coords="171,89,342,96,344,117,175,111" 
alt="Contact"
href="mailto: info@riflenice.com" />

<area shape="poly" 
coords="29,127,160,119,155,194,25,195" 
alt="Shows"
href="shows.html" target="frame" />

<area shape="poly" 
coords="46,208,140,220,134,277,39,264" 
alt="Videos"
href="videos.html" target="frame" />

<area shape="poly" 
coords="27,291,157,305,151,372,23,363" 
alt="Store"
href="www.flatjody.com/zen-cart" target="frame" />

<area shape="poly" 
coords="11,390,200,379,202,443,14,455" 
alt="Downloads"
href="downloads.html" target="frame" />

<area shape="poly" 
coords="17,485,173,464,182,530,28,557" 
alt="About"
href="about.html" target="frame" />




</map>

<div id="frame">
<iframe src="http://www.riflenice.com/news.html" name="frame" width=592 height=559 scrolling="auto"></iframe>
</div>



<div id="radio">
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="160" height="350" id="mp3player"
		codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" >
    <param name="movie" value="mp3player.swf" />
    <param name="wmode" value="transparent" />
    <embed src="mp3player.swf" wmode="transparent" width="160" height="350" name="mp3player" 
    	type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
<!--
<iframe src="http://www.riflenice.com/radi.html" name="radio" width=250 height=480 scrolling="no"></iframe> -->
</div>
<div id="mailinglist">
<?php 
if (isset($_POST["email"])){
  $toaddress = "info@riflenice.com" ;
  $subject = "Rifle Nice mailing list addition";
  $name =$_POST["name"];
  $email = $_POST["email"];
  $from= "From: ".$name."<".$email."> \r\n";
mail($toaddress, $subject, "", $from);

echo "Mailing list joined"; }

?>
<p>
<form action="http://www.riflenice.com/index.php" method="post">
Join our mailing list to get show announcements</p><br />
<input type="text" name="name" class="name" value="Your name" />
<input type="text" name="email" class="email" value="Your e-mail" /><br /><br />
<input type=submit class="submit" value="Send" />
</form>
</div>


</body>
</html>
