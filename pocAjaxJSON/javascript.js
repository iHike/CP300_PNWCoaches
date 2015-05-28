$.ajax({ url: 'php.php',
 data: {action: 'test'},
 dataType: 'json',
 type: 'post',
 success: function(output) {
              alert(output);
          }
 });

//JSON.parse('[1, 2, 3,]');