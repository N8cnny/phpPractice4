<?php
date_default_timezone_set("America/Los_Angeles");
$hour=date("h");
echo "In Los Angeles, ";

switch($hour)
{
 case"01": echo "it is One o'clock now"; break;
 case"02": echo "it is Two o'clock now"; break;
 case"03": echo "it is Three o'clock now"; break;
 case"04": echo "it is four o'clock now"; break;
 case"05": echo "it is Five o'clock now"; break;
 case"06": echo "it is Six o'clock now"; break;
 case"07": echo "it is Seven o'clock now"; break;
 case"08": echo "it is Eight o'clock now"; break;
 case"09": echo "it is nine o'clock now"; break;
 case"10": echo "it is Ten o'clock now"; break;
 case"11": echo "it is Eleven o'clock now"; break;
 case"12": echo "it is Twelve o'clock now"; break;
}

echo "<hr size='2'>";

$x =date("w");

switch($x)
{
 case 0 : echo "Sunday"; break;
 case 1 : echo "Monday"; break;
 case 2 : echo "Tuesday"; break;
 case 3 : echo "Wednesday"; break;
 case 4 : echo "Thursday"; break;
 case 5 : echo "Friday"; break;
 case 6 : echo "Saturday"; break;
 default: echo "No Such option"; break;
}

echo "<hr size='2'>";

$M=date("M");
switch ($M)
{
 case "Jan": $month="January"; break;
 case "Feb": $month="February"; break;
 case "Mar": $month="March"; break;
 case "Apr": $month="April"; break;
 case "May": $month="May"; break;
 case "Jun": $month="Jun"; break;
 case "Jul": $month="July"; break;
 case "Aug": $month="August"; break;
 case "Sep": $month="September"; break;
 case "Oct": $month="October"; break;
 case "Nov": $month="November"; break;
 case "Dec": $month="December"; break;
}

echo $month;
?>

