<?php
  $paragraph  = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue tempus vulputate. Ut sit amet nisl eget mi consectetur vehicula nec a dui. Mauris semper fermentum mauris, id facilisis sem porttitor quis. Maecenas id sapien nulla. Morbi libero est, vestibulum pulvinar placerat in, placerat sed urna. Etiam sit amet arcu.";
  $badword = $_GET["badword"];
  $noBadword = str_replace($badword,"***",$paragraph);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>

<body>
  <h4>
    <?php echo $paragraph ?>
  </h4>
  <h3>
    lunghezza: <?php echo strlen($paragraph); ?> caratteri
  </h3>
  <hr>

  <h4>
    <?php echo $noBadword; ?>
  </h4>
  <h3>
    lunghezza: <?php echo strlen($noBadword); ?> caratteri
  </h3>


  
</body>
</html>