<?php


// PHP is awesome

// This is a variable
$message = "PHP is awesome";

# This is a comment

/* 
Thisis a multi
line
comment
*/

var_dump($message);



var_dump($_GET);

echo "ciao " . $_GET['name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>

<body>

  <h1>
    <!-- Echo with a variable -->

    <?php echo $message; ?>

  </h1>

  <!-- Echo with strings/numbers 
  <p>

    <?= "cuiaoi" ?>

  </p>-->

  <!-- Echo with numbers 
  <?= 123 ?>
-->

  <!-- 
  <h3><?php //echo "ciao " . $_GET['name']; 
      ?></h3> -->


  <hr>

  <div class="container">


    <form action="server.php" method="get" class="card p-2">

      <input type="text" name="name" class="form-control" placeholder="Type something">
      <button type="submit" class="btn btn-dark">Send</button>

    </form>
  </div>


</body>

</html>