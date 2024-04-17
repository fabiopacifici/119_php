<?php



/* 

Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.

*/


$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];


//var_dump(isset($_GET['parking']));


if (isset($_GET['parking'])) {

  $hotels = array_filter($hotels, fn ($hotel) => $hotel['parking']);
  //var_dump($hotels);
  //die;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

</head>

<body>



  <main>

    <div class="container">
      <form action="" method="get">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="yes" name="parking" id="parking" />
          <label class="form-check-label" for="parking"> Parking </label>
        </div>

        <button type="submit" class="btn btn-primary">Filter</button>
        <button type="reset" class="btn btn-secondary">Cancel</button>
      </form>

    </div>
    <section>

      <div class="container">

        <div class="table-responsive">
          <table class="table table-light">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
              </tr>
            </thead>
            <tbody>


              <?php foreach ($hotels as $index => $hotel) : ?>

                <tr class="">
                  <td scope="row"><?= $hotel['name'] ?></td>
                  <td><?= $hotel['description'] ?></td>
                  <td>
                    <?php if ($hotel['parking']) : ?>
                      <span>🅿</span>
                    <?php else : ?>
                      <span>❌</span>
                    <?php endif; ?>
                  </td>
                  <td><?= $hotel['vote'] ?></td>

                </tr>

              <?php endforeach; ?>

            </tbody>
          </table>
        </div>



      </div>

    </section>

  </main>



</body>

</html>