<?php

$cJSONString = "";

function JSONArray() {
  
    $cPHPArray = array("AAA", "BBB", "CCC", "DDD", "EEE", "FFF");
    $cJSONArray = json_encode($cPHPArray);
    echo "$cJSONArray";
  
}

JSONArray(); // call the function

?>