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



$fragglenext=$fraggle + 1;
if($fraggle >= 8){$fragglenext=1;}
?>
<div class="fraggleimage">
<?php	
  $imagelink="fraggle.php?id=".$fragglenext;
  $imagesource="images/fraggle".$fraggle.".jpg";
  
  echo '<a href='.$imagelink.' target="contentframe"><img src='.$imagesource.' class="fraggleimage" /></a>' ;  

?>
</div>
<?php


$arrowlink="fraggle.php?id=".$fragglenext;




echo '<a href='.$arrowlink.' target="contentframe" class="arrow">next</a>';



echo '<ul>';

for($i=1; $i<=8; $i+=1)
{
  $dotlink = "fraggle.php?id=".$i;
  echo '<li><a href='.$dotlink.' target="contentframe" class="dot">$i</a></li>';

}
echo '</ul>';
?>






</div>
</body>
</html>
