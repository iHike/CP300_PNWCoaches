<?php

//$cJSONString = "";

function JSONArray() {
  
$cars = array
   (
   array("Tom"),
   array("Frank"),
   array("Bob"),
   array("Andrew")
   );
   
//echo $cars[0][0].": In stock: ".$cars[0][1].".<br>";
//echo $cars[1][0].": In stock: ".$cars[1][1].".<br>";
//echo $cars[2][0].": In stock: ".$cars[2][1].".<br>";
//echo $cars[3][0].": In stock: ".$cars[3][1].".<br>";

$cJSONArray = json_encode($cars);
echo "$cJSONArray";
  
//  
//    $cPHPArray = array
//  (
//  array("One","AAA"),
//  array("One","AAA"),
//  array("One","AAA"),
//  array("One","AAA")
//  );
//      
////  $cPHPArray = array("One" => "AAA", "Two" => "BBB", "Three" => "CCC", "Four" => "DDD", "Five" => "EEE", "Six" : "FFF");
//  
//  echo $PHPArray[1][1];
//  
////    $cJSONArray = json_encode($cPHPArray);
////    echo "$cJSONArray";
//  
}

JSONArray();

//$cars = array
//   (
//   array("One"),
//   array("Two"),
//   array("Three"),
//   array("Four")
//   );
//   
////echo $cars[0][0].": In stock: ".$cars[0][1].".<br>";
////echo $cars[1][0].": In stock: ".$cars[1][1].".<br>";
////echo $cars[2][0].": In stock: ".$cars[2][1].".<br>";
////echo $cars[3][0].": In stock: ".$cars[3][1].".<br>";
//
//$cJSONArray = json_encode($cars);
//echo "$cJSONArray";

?>