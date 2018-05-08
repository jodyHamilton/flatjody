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
if($fraggle >= 50){$fragglenext=1;}
?>
<div class="qyjtimage">
<?php	
  $imagelink="qyjt.php?id=".$fragglenext;
  $imagesource="images/qyjt".$fraggle.".jpg";
  
  echo '<a href='.$imagelink.' target="contentframe"><img src='.$imagesource.' class="fraggleimage" /></a>' ;  

?>
</div>
<?php


$arrowlink="qyjt.php?id=".$fragglenext;




echo '<a href='.$arrowlink.' target="contentframe" class="arrow">next</a>';



echo '<ul>';

  $i=1;
  $dotlink = "qyjt.php?id=".$i;
  echo '<li><br />Section One<br />
  <a href='.$dotlink.' target="contentframe" class="dot">$i</a></li>';
  $i=18;
  $dotlink = "qyjt.php?id=".$i;
  echo '<li><br />Section Two<br />
  <a href='.$dotlink.' target="contentframe" class="dot">$i</a></li>';
  $i=33;
  $dotlink = "qyjt.php?id=".$i;
  echo '<li><br />Section Three<br />
  <a href='.$dotlink.' target="contentframe" class="dot">$i</a></li>';
  


echo '</ul>';

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
