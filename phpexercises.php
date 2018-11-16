<html>
<head>
<title> inclass php exercises </title>
</head>
<body>

<p><i>"Good morning, Dave," said HAL."</i>
<br>
<?php 
$r = 3 ;
$a= pi()*$r*$r;
$radius= $r; 
echo "the radius of this circle is " . $radius . " and the area of this circle is " . $a ; 
?>
<br>
<?php 
$f = 75.3;
$celFahr = $f;
$c = (5/9)*($f-32); 
echo "The Fahrenheit tempurature is " . $celFahr . " and the converted Celsius tempurature is " . $c ; 
?>
<br>
<?php 

$stringvar = " PHP is fun ";

$trimmed = trim($stringvar);

echo $stringvar ; 
$x = strlen($trimmed); 
echo " this string has " . $x . " characters" ;

?>
<br>
<?php 
$rand = "WDWWLWWWLDDWDLL";
$index = strpos($rand, "WWW");
echo  "The first occurrance of L after WWW will be found and printed and the string we will search through is " ."<br>" .$rand . " here is the answer " . $rand[$index+3]; 

?>
<br>
<?php
function palindrome($string){   
    if (strrev($string) == $string){   
        return 1;   
    } 
    else{ 
        return 0; 
    } 
}   
  
$palind = "able was I ere I saw elba";  
echo "We will check to see if ". $palind . " is a palindrome" . "<br>"; 
if(Palindrome($palind)){   
    echo "this is a palindrome";   
}  
else {   
echo "this not a palindrome";   
} 

?>
<br>
<?php 
$num = 7; 
echo "we will test if ". $num . " is an even number <br>";
function test($integer) {
	if ( $integer % 2 ) {
		echo "this is an odd number <br>" ;
	}
	else {
		echo "this is an even number <br>" ;
	}
}
echo test($num); 

?>
<br> 
<?php 
if ( date(L) == 1) {
	echo "<b> this is a leap year </b>";
}
else { 
echo "<b> this is not a leap year </b>"; 
}
	


?>
</p>
</body> 
</html>