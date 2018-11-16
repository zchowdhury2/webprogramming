<?php
   ob_start();
   session_start();
?>


 <!DOCTYPE html>
<html>
<head>
	<title> Tha Die </title>
<link rel="stylesheet" href="project1.css">
</head>

<body>
	<a href="project1.html"><img src="doubledie.gif" alt="doubledie" > </a>

		<div style="color: #2A76BE; font-weight: bold;">
		<br><br>
		 <h2> Welcome to our dice game!</h2>
		 <br><br>
	</div>


	<?php

		function roll() {
			return rand(1,6);
		}


 	 if(isset($_POST['roll1'])){

		$_SESSION['turns']++;

		if (rand(1,6) == 1 && $_SESSION['turns'] % 2 == 1) {
			echo '<img class="center" src="DiceFace1.png">';
			echo "<br>";
			$_SESSION['p1Score'] += 1000;
		}
		else if (rand(1,6) == 1 && $_SESSION['turns'] % 2 == 0) {
			echo '<img class="center" src="DiceFace1.png">';
			echo "<br>";
			$_SESSION['p2Score'] += 1000;
		}
		else if (rand(1,6) == 2 && $_SESSION['turns'] % 2 == 1) {
			echo '<img class="center" src="DiceFace2.png">'; 
			echo "<br>";
			$_SESSION['p1Score'] += 2000;
		}
		else if (rand(1,6) == 2 && $_SESSION['turns'] % 2 == 0) {
			echo '<img class="center" src="DiceFace2.png">';
			echo "<br>";
			$_SESSION['p2Score'] += 2000;
		}
		else if (rand(1,6) == 3 && $_SESSION['turns'] % 2 == 1) {
			echo '<img class="center" src="DiceFace3.png">';
			echo "<br>";
			$_SESSION['p1Score'] += 3000;
		}
		else if (rand(1,6) == 3 && $_SESSION['turns'] % 2 == 0) {
			echo '<img class="center" src="DiceFace3.png">';
			echo "<br>";
			$_SESSION['p2Score'] += 3000;
		}
		else if (rand(1,6) == 4 && $_SESSION['turns'] % 2 == 1) {
			echo '<img class="center" src="DiceFace4.png">';
			echo "<br>";
			$_SESSION['p1Score'] += 4000;
		}
		else if (rand(1,6) == 4 && $_SESSION['turns'] % 2 == 0) {
			echo '<img class="center" src="DiceFace4.png">';
			echo "<br>";
			$_SESSION['p2Score'] += 4000;
		}
		else if (rand(1,6) == 5 && $_SESSION['turns'] % 2 == 1) {
			echo '<img class="center" src="DiceFace5.png">';
			echo "<br>";
			$_SESSION['p1Score'] += 5000;
		}
		else if (rand(1,6) == 5 && $_SESSION['turns'] % 2 == 0) {
			echo '<img class="center" src="DiceFace5.png">';
			echo "<br>";
			$_SESSION['p2Score'] += 5000;
		}
		else if (rand(1,6) == 6 && $_SESSION['turns'] % 2 == 1) {
			echo '<img class="center" src="DiceFace6.png">';
			echo "<br>";
			$_SESSION['p1Score'] += 6000;
		}
		else if (rand(1,6) == 6 && $_SESSION['turns'] % 2 == 0) {
			echo '<img class="center" src="DiceFace6.png">';
			echo "<br>";
			$_SESSION['p2Score'] += 6000;
		} else {
			echo '<img class="center" src="DiceFace1.png">';
			echo "<br>";
			$_SESSION['p1Score'] += 1000;
			$_SESSION['p2Score'] += 1000;
		}
	}

	echo "<br><br>";

	echo '<table class="turn">';
	echo '<tr>';
	echo '<th>Turns</th>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>';
	echo "Turn " .  $_SESSION['turns']; 
	echo '</td>';
	echo '</tr>';
	echo '</table>';

	echo '<table class="score">';
	echo '<tr>';
	echo '<th class="align" >Scoreboard</th>';
	echo '</tr>';
	echo '<tr>'; 
	echo '<td> Player 1 </td>';
	echo '<td> Player 2 </td>';
	echo '</tr>';
	echo '<tr>';
	echo "<td>". $_SESSION['p1Score'] ."</td>";
	echo "<td>". $_SESSION['p2Score'] ."</td>";
	echo '</tr>';
	echo '</table> <br><br>';

	unset($_POST['roll1']);
	
	echo '<br><br>';
	echo '<br><br>';
	echo '<br><br>';	
	
?>

	<form action="project2.php" method="POST">
		<input name="roll1" type="submit" value="Roll The Die" />
	</form>

</body>

<footer>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>

	<a href="about.html">About Us</a>
		&nbsp;&nbsp;|&nbsp;&nbsp; <!-- This creates a bit of space between the links -->
	<a href="rules.html">How to Play</a>
</footer>
</html> 