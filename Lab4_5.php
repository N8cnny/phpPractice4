<?php

if($_POST)
{
 $y=$_POST["yr"] % 12;

switch($y)
{
case 0 : $z="Monkey"; break;
case 1 : $z="Rooster"; break;
case 2 : $z="Dog"; break;
case 3 : $z="Pig"; break;
case 4 : $z="rat"; break;
case 5 : $z="cow"; break;
case 6 : $z="Tiger"; break;
case 7 : $z="rabbit"; break;
case 8 : $z="Dragon"; break;
case 9 : $z="snake"; break;
case 10 : $z="horse"; break;
case 11 : $z="Goat"; break;

}

echo "you were born in a <b>$z</b> year and it is ";

echo ((($y % 4) ==0) && ((($y % 100) !=0) || (($y%400) ==0 ))) ? "a leap year." : "not a leap year.";
}

else{
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "post">
What year were you born in? <i> y</i>:
<input type="text" name="yr" size= 5>
<input type= "submit" value="check"> 
</form>
<?php
}
?>