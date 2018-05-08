<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="flatjody.css" rel="stylesheet" type="text/css"><base href="news.html">
<link href="content.css" rel="stylesheet" type="text/css"><base href="news.html">
</head>

<body>
<div class="fraggle">

<?php 
if (isset($_GET[id]))
  {$fraggle=$_GET[id];}
else
{$fraggle=1;}

switch ($fraggle){
	case "6":
		echo '<div class="pizzawide">';
		break;	
	case "7":
		echo '<div class="pizzawide">';
		break;	
	case "8":
		echo '<div class="pizzawide">';
		break;	
	case "10":
		echo '<div class="pizzawide">';
		break;	
	case "11":
		echo '<div class="pizzawide">';
		break;	
	case "12":
		echo '<div class="pizzawide">';
		break;	
	case "13":
		echo '<div class="pizzawide">';
		break;	
	case "14":
		echo '<div class="pizzawide">';
		break;	
	case "15":
		echo '<div class="pizzawide">';
		break;	
	case "16":
		echo '<div class="pizzawide">';
		break;	
	case "19":
		echo '<div class="pizzawide">';
		break;	

	default: 
		echo '<div class="pizzatall">';
		break;
		}
	    
$fragglenext=$fraggle + 1;
if($fraggle >= 19){$fragglenext=1;}
?>

<?php	
  $imagelink="pizzaboy.php?id=".$fragglenext;
  $imagesource="images/pizzaboy".$fraggle."web.jpg";
  
  echo '<a href='.$imagelink.' target="contentframe"><img src='.$imagesource.' class="pizzaimage" /></a>' ;  

?>
</div>
<?php


$arrowlink="pizzaboy.php?id=".$fragglenext;




echo '<a href='.$arrowlink.' target="contentframe" class="arrow">next</a>';
echo '<div class="pizzaboy">';
echo '<br /><a href="PizzaBoyComic.pdf">Download this comic as pdf to view full pages (printable)</a>';
echo '</div>';

?>



</div>
<!-- Start of StatCounter Code -->
<script type="text/javascript" language="javascript">
var sc_project=1815125; 
var sc_invisible=1; 
var sc_partition=13; 
var sc_security="427e057f"; 
</script>

<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/frames.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c14.statcounter.com/counter.php?sc_project=1815125&java=0&security=427e057f&invisible=1" alt="free web stats" border="0"></a> </noscript>
<!-- End of StatCounter Code -->
</body>
</html>
