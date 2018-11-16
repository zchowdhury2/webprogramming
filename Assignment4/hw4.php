

<html>
<head>
<style>
body {text-align: center;}
<?php 
if(isset($_POST["submit"])){
	switch($_POST["coloroption"]){
		  case "Red":
        echo "p {color:red;}";
        break;
    case "Blue":
        echo "p {color:blue;}";
        break;
    case "Black":
        echo "p {color:black;}";
        break;
    default:
        echo "p {color black";
		
	}
	
}

if(isset($_POST["submit"])){
	switch($_POST["fonts"]){
		  case "Times New Roman":
		   echo "p {    font-family: \"Times New Roman\", Times, serif;}";
		  break;
		  case "Comic Sans":
		   echo "p {    font-family:\"Comic Sans MS\", cursive, sans-serif;}";
		  break;
		  case "Impact":
		   echo "p {  font-family: Impact, Charcoal, sans-serif;}";
		  break;
		  default:
		  echo "p {    font-family: \"Times New Roman\", Times, serif;}";
		  
	}
}
if(isset($_POST["submit"])){
	switch($_POST["backgroundcolor"]){
		  case "Light blue":
		   echo "p { background-color: lightblue;}";
		  break;
		  case "Orange":
		    echo "p { background-color: orange;}";
		  break;
		  case "Yellow":
		      echo "p { background-color: yellow;}";
		  break;
		  default:
		    echo "p { background-color: white;}";
	}
}
?>
</style>

 <link rel="stylesheet" type="text/css" href="hw4.css">
<title> Assignment 4</title>

</head>
<body>
 <a href="../index.html">Back to homepage</a> 
 <br> <h2>Assignment 4 part 1</h2>

<form action="hw4.php" method="post">
<h5> Text color </h5>
<select name="coloroption">
  <option >Red</option>
  <option>Blue</option>
  <option >Black</option>  
  </select>
  <br>
<h5> Fonts </h5>

  <select name="fonts">
  <option >Times New Roman</option>
  <option>Comic Sans</option>
  <option >Impact</option>  
  </select>
  <br>
  <h5> background-color of the text</h5>

  <select name="backgroundcolor">
  <option >Light blue</option>
  <option>Orange</option>
  <option >Yellow</option>  
  </select>
  <br>
  <textarea rows="15" cols="10" autofocus name="about">
Input text here
  </textarea>

   <input type="submit" name="submit" value="submit">
</form> 
<br>
<?php 
if(isset($_POST["submit"])){
	echo "<p>". $_POST[about] . "</p>";
}

?>

<h1> Part Two </h1>
  <?php

            date_default_timezone_set('America/New_York');

            $hours_to_show = 11;

           if(isset($_POST['submit1'])){

               $hours_to_show = $_POST["hours_to_show"] - 1;

           }

            $timeStamp = time();

            $todayDate = date("D, F j, Y", $timeStamp);                                                  

            $currentTime = date("g:i a",$timeStamp);   

            $todayDay = date("l", $timeStamp);

            function get_hour_string($timeStamp){

                $hour = date("g", $timeStamp);

                $am_or_pm = date("a", $timeStamp);

                return "$hour:00 $am_or_pm";

            }

        ?>

      

        <div class="container">

            <h1>

                <?php

                    echo "<br><b>Calendar Page</b><br>";

                    echo "<br><b>The day of the week</b>: $todayDay";

                    echo "<br><b>Today's date</b>: $todayDate";

                    echo "<br><b>The current time is</b> $currentTime <br>";

                ?>

               <form method="POST">

                   Hours to show: <input  type="number" name="hours_to_show">

                   <input  type="submit" value="submit" name = "submit1">

               </form>

            </h1>

            <table id="event_table">

            <tr>  

                <th class='hr_td'></th>

                <th class='table_header'>&nbsp&nbsp&nbsp&nbsp&nbsp Bob</th>

                <th class='table_header'>&nbsp&nbsp&nbsp&nbsp&nbsp McGregor</th>

                <th class='table_header'>&nbsp&nbsp Khabib</th>

            </tr>

            <tr> <br> </tr>

        <?php

        for ($i = 0; $i <= $hours_to_show; $i++) {

            $hours = get_hour_string($timeStamp + $i * 60 * 60);

            if ($i % 2 == 0) {

                echo "<tr class='even_row'> \n ";

                echo "<td class='hr_td'>

                            <b>$hours</b>

                      </td>

                      <td> </td>                      

                      <td> </td>

                      <td> </td> \n";

                echo "</tr> \n";

            }

            if ($i % 2 != 0) {

                echo "<tr class='odd_row'> \n";

                echo "<td class='hr_td'>

                            <b>$hours</b>

                      </td>

                      <td> </td>

                      <td> </td>

                      <td> </td> \n";

                echo "</tr> \n";

            }

        }

        ?>  

            </table>

        </div>
<br>
</body> 
</html>