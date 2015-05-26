<?php

//Variables for connecting to your database.
//These variable values come from your hosting account.
$hostname = "localhost";
$username = "pnwcoaches";
$dbname = "pnwcoaches";
$password = "Bozeman1803!";
$usertable = "endTheTrend";

//SQL Fields for JSON
$cNamefield = "coachName";
$cCityField = "coachCity";
$cStoryField = "coachStory";
$cStatementField = "coachStatement";
$cPicField = "coachPic";
$cStatusfield = "coachUse";

//Connecting to your database
mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
mysql_select_db($dbname);

//Fetching from your database table.
$selectQuery = "SELECT * FROM $usertable";
$selectResult = mysql_query($selectQuery);
//$updateQuery = "UPDATE endTheTrend SET $cStatusfield = '1' WHERE $cNamefield = 'coachName 00'";
//$supdateResult = mysql_query($updateQuery);

//echo $selectResult;
//echo "<br>";
//echo $updateResult;
//echo "<br>";

if ($selectResult) {
  
    while($r = mysql_fetch_array($selectResult)) {
      
//        $name = $r["$cNamefield"];
//        $city = $r["$cCityField"];
//        $story = $r["$cStoryField"];
//        $statement = $r["$cStatementField"];
//        $pic = $r["$cPicField"];
//        $status = $r["$cStatusfield"];
//      
//        echo "\"$name\",\"$city\",\"$story\",\"$statement\",\"$pic\",\"$status\"<br>";
      
      $rows[] = $r;
      
    }
  
  echo json_encode($rows);
  
}

mysqli_close();

?>