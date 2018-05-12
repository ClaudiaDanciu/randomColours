<?php
        $colors = array('red', 'green', 'blue', 'black', 'white');
        $color_count= count($colors);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random Colours</title>
        <style type = "text/css">
            body{
              margin: 0;
              padding: 0;
              background: <?php echo $colors[rand(0, $color_count-1)]; ?>;
          }
        </style>

        
    </head>
    <body>
        
        
        
    </body>
</html>
