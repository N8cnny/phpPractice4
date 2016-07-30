<!Doctype html>
<hmtl>
<body>

Method 1: if<br>
<?php
$hour=date("h");

if ($hour == "01") {echo "It's One o'clock now";}
if ($hour == "02") {echo "It's Two o'clock now";}
if ($hour == "03") {echo "It's Three o'clock now";}
if ($hour == "04") {echo "It's Four o'clock now";}
if ($hour == "05") {echo "It's Five o'clock now";}
if ($hour == "06") {echo "It's Six o'clock now";}
if ($hour == "07") {echo "It's Seven o'clock now";}
if ($hour == "08") {echo "It's Eight o'clock now";}
if ($hour == "09") {echo "It's Nine o'clock now";}
if ($hour == "10") {echo "It's Ten o'clock now";}
if ($hour == "11") {echo "It's Eleven o'clock now";}
if ($hour == "12") {echo "It's Twelve o'clock now";}
?>

<p> Method:2 if .. Then<br>

<?php
$x=date("w");
if ($x ==0) {echo "Sunday";}
  elseif ($x ==1) {echo "Monday";}
    elseif ($x ==2) {echo "Tuesday";}
      elseif ($x ==3) {echo "Wednesday";}
        elseif ($x ==4) {echo "Thursday";}
          elseif ($x ==5) {echo "Friday";}
            elseif ($x ==6) {echo "Saturday";}
else {echo "No such option";}
?>

<p> Method 2: Alternative Structure<br>

<?php
$m= date("M");

if ($m == "Jan") : $month = "January";
elseif ($m == "Feb") : $month = "Febuary";
elseif ($m == "Mar") : $month = "March";
elseif ($m == "Apr") : $month = "April";
elseif ($m == "May") : $month = "May";
elseif ($m == "Jun") : $month = "Jun";
elseif ($m == "Jul") : $month = "July";
elseif ($m == "Aug") : $month = "August";
elseif ($m == "Sep") : $month = "Septemeber";
elseif ($m == "Oct") : $month = "October";
elseif ($m == "Nov") : $month = "Novemeber";
elseif ($m == "Dec") : $month = "Decmeber";

endif;
echo "It is $month.";
?>
</body>
</html>