<html>
<head>
<title>Charlie ate my Lunch!</title>
</head>
<body>

<p>
<br>
<?php 
function isBitten() {
	$lunch = rand(1,2); 
	
	if ($lunch == 1) { 
	return true;
	}
	else {
		return false;
	}
}
	if ( isBitten() == true ) {
		echo "Charlie ate my lunch!"; 
	}
	else { 
	echo "Charlie did not eat my lunch!";
	}

?>
<br>
<?php 
echo '<table width="300px" height="300px" border="1px" cellpadding="1px">';

for ($i = 0;$i < 8;$i++) {
	echo '<tr width="35px" height="35px">';
	for ($j = 0;$j < 8;$j++) {
		$checkerboard = ($i+$j)%2?'red':'black';
		echo '<td bgcolor="'.$checkerboard.'"/>';
	}
	echo '</tr>';
}
echo '</table>';
?>
<br>
<?php 
 $month = array(" January ", " February ", " March ", " April ", " May ", " June ", " July ", " August "," September ", " October ", " November ", " December ");   
 $length = count($month);
 for ($i = 0; $i < $length; $i++) {
  print $month[$i];
}
echo "<br>";
foreach($month as $b) {
  print $b;
}
 echo "<br>";
 sort($month);
echo "<br>";
$dates = count($month);
for($x = 0; $x < $dates; $x++) {
    echo $month[$x];
    echo "<br>";
}
echo "<br><br>";
foreach($month as $c) {
  print $c;
}
?>
<?php
  function part4(){
        
      $restaurant = array("Chama Gaucha" => "40.50", "Aviva by Kameel" => "15.00", 
      "Bone's Restaurant" => "65.00", "Umi Sushi Buckhead" => "40.50",
      "Fandangles" => "30.00", "Capital Grille" => "60.50",
      "Canoe" => "35.50", "One Flew South" => "21.00",
      "Fox Bros. BBQ" => "15.00", "South City Kitchen Midtown" => "29.00" );

     echo "<table><tr><td>Restaurant</td><td>Average Cost</td></tr>";
     foreach($restaurant as $x => $x_value) {
    echo "<tr><td>" . $x . "</td><td>" . $x_value . "</td></tr>";
    echo "<br>";
}
          }
      function alphasort(){
           
      $restaurant = array("Chama Gaucha" => "40.50", "Aviva by Kameel" => "15.00", 
      "Bone's Restaurant" => "65.00", "Umi Sushi Buckhead" => "40.50",
      "Fandangles" => "30.00", "Capital Grille" => "60.50",
      "Canoe" => "35.50", "One Flew South" => "21.00",
      "Fox Bros. BBQ" => "15.00", "South City Kitchen Midtown" => "29.00" );
      
     echo "<table><tr><td>Restaurant</td><td>Average Cost</td></tr>";
          ksort($restaurant);
     foreach($restaurant as $x => $x_value) {
    echo "<tr><td>" . $x . "</td><td>" . $x_value . "</td></tr>";
    echo "<br>";
}
          }
      function pricesort(){
     
      $restaurant = array("Chama Gaucha" => "40.50", "Aviva by Kameel" => "15.00", 
      "Bone's Restaurant" => "65.00", "Umi Sushi Buckhead" => "40.50",
      "Fandangles" => "30.00", "Capital Grille" => "60.50",
      "Canoe" => "35.50", "One Flew South" => "21.00",
      "Fox Bros. BBQ" => "15.00", "South City Kitchen Midtown" => "29.00" );
      asort($restaurant);
     echo "<table><tr><td>Restaurant</td><td>Average Cost</td></tr>";
     foreach($restaurant as $x => $x_value) {
    echo "<tr><td>" . $x . "</td><td>" . $x_value . "</td></tr>";
    echo "<br>";
}
          }
      
      
  $restaurant = array("Chama Gaucha" => "40.50", "Aviva by Kameel" => "15.00", 
      "Bone's Restaurant" => "65.00", "Umi Sushi Buckhead" => "40.50",
      "Fandangles" => "30.00", "Capital Grille" => "60.50",
      "Canoe" => "35.50", "One Flew South" => "21.00",
      "Fox Bros. BBQ" => "15.00", "South City Kitchen Midtown" => "29.00" );
echo "<br> not sorted <br>";
  part4();
  
  alphasort();
  echo "alphabetically sorted<br>";

  pricesort();
          echo "sorted by price <br>";
  ?>
<br>
</p>
</body> 
</html>