<?php
/* 

Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.

Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

*/


//var_dump(empty($_GET['word']));
$word = $_POST['word'];
$sentence = $_POST['sentence'];

//var_dump(empty($_GET['sentence']));


/* 
stampare a schermo il paragrafo e la sua lunghezza
*/


/* echo $word;
echo '<br>';
echo $sentence;
echo '<br>';
echo strlen($sentence); */


$moderatedSentence = str_replace($word, '***', $sentence);

//var_dump($moderatedSentence);
//var_dump(strlen($moderatedSentence));
/* echo '<br>';
echo $moderatedSentence;
echo '<br>';
echo strlen($moderatedSentence); */
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modarator response</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>

<body>


  <div class="container">


    <h1>Moderator</h1>


    <p>
      Original sentence: <?= $sentence; ?>
    </p>
    <p>
      Length: <?= strlen($sentence) ?>
    </p>

    <hr>
    <p>
      Moderated sentence: <?= $moderatedSentence; ?>
    </p>
    <p>
      Length: <?= strlen($moderatedSentence) ?>

    </p>

    <a href="/">Go back</a>

  </div>



</body>

</html>