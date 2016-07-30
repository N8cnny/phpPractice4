<?php
if ($_POST)
{
 $x=$_POST["vofx"];

 if ($x>=5)
  {
   echo "x is greater than or equal to 5";
  }
  else
  {
   echo"x is less than 5";
  }

}

else {
?>

<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Ener a value for <i>x</i>:
<input type = "text" name= "vofx" size= 5>
<input type= "submit" calue= "check">
</form>
</p>
<?php
}
?>