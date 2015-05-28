<?php

$cJSONString = "";
  echo "TEST<br>";

function (get) {
  $cPHPArray = array("AAA", "BBB", "CCC", "DDD", "EEE", "FFF");
  $cJSONArray = json_encode($cPHPArray);
//  echo "$cJSONArray";
}

echo "$cJSONArray[1]";
echo "<br>TEST";

?>

<!-- ("coachPic":"AAA", "coachName":"BBB", "coachCity":"CCC", "coachStory":"EEE", "coachStatement":"FFF", "coachUse":"1") -->