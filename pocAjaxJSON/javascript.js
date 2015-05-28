$.ajax({ url: 'php.php',
 data: {action: 'test'},
 dataType: 'json',
 type: 'post',
 success: function(output) {
   
   var $one = output[0];
   var $two = output[1];
   var $three = output[2];
   var $four = output[3];
   
              alert($four);
   
//   $parsedJSON = JSON.parse(output);
//   
//   echo "$parsedJSON[1)";
   
//   [["One","A"],["Two","B"],["Three","C"],["Four","D"]]
          }
 });

//JSON.parse('[1, 2, 3,]');