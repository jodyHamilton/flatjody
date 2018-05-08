<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="flatjody.css" rel="stylesheet" type="text/css">
<link href="content.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="albums">

<?php 
if (isset($_GET[id]))
  {$fraggle=$_GET[id];}
else
{$fraggle=1;}



$fragglenext=$fraggle + 1;
if($fraggle >= 3){$fragglenext=1;}
?>
<div class="sinkimage">
<?php	
  $imagelink="sink.php?id=".$fragglenext;
  $imagesource="images/sink".$fraggle.$fraggle.".gif";
  
  echo '<a href='.$imagelink.' target="contentframe"><img src='.$imagesource.' class="sinkimage" /></a>' ;  

?>
</div>

<?php


$arrowlink="sink.php?id=".$fragglenext;

echo '<a href='.$arrowlink.' target="contentframe" class="arrow">next</a>';
?>

<?php
echo '<ul>';
for($i=1; $i<=3; $i+=1)
{
  $dotlink = "sink.php?id=".$i;
  echo '<li><a href='.$dotlink.' target="contentframe" class="dot">$i</a></li>';

}
 echo '</ul>';
?>



</div>






</body>
</html>
