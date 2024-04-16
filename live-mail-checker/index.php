<?php

/* 
# iscrizione ad una newsletter.



1. Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.


2. Se è corretta stampare un messaggio di success in un alert di Bootstrap, altrimenti (sempre in un alert di Bootstrap) mostrare un messaggio di errore.



**Milestone 1**:
scriviamo tutto (logica e layout) in un unico file *index.php*

**Milestone 2:**
verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale

Aggiungere anche un po’ di stile alla pagina tramite Bootstrap.

Cosa controlla isset? 
qualsiasi valore diverso da null.

*/


var_dump($_GET);
var_dump(isset($_GET['email']));

$email = $_GET['email'];

if (isset($email)) {

  // check if it's ok
  var_dump($email);

  // check if $email contains a `@` and `.`

  /*   var_dump(str_contains($email, '@'), str_contains($email, '.'));

  if (str_contains($email, '@') && str_contains($email, '.')) {
    $message = 'ok';
  } else {
    $message = 'Fail';
  } */

  $response = checkEmail($email);

  // generate alert message
  $message = generateAlertMessage($response);
}


function generateAlertMessage($response)
{
  if ($response) {
    return [
      'status' => 'success',
      'text' => 'Success! your are subscribed'
    ];
  }
  return [
    'status' => 'danger',
    'text' => 'Error! your email is incorrect.'
  ];
}

function checkEmail($mail)
{
  if (str_contains($mail, '@') && str_contains($mail, '.')) {
    return true;
    /*  return [
      'status' => 'success',
      'text' => 'Success! your are subscribed'
    ]; */
  }
  return false;
  /*  return
    [
      'status' => 'danger',
      'text' => 'Error! your email is incorrect.'
    ]; */
}




?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Newletter</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="/" aria-current="page">Home
                <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>



  </header>


  <main>
    <?php if (isset($message)) : ?>

      <div class="alert alert-<?= $message['status']; ?>" role="alert">
        <strong><?= $message['text'] ?></strong>
      </div>

    <?php endif; ?>


    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome to my site</h1>
        <p class="col-md-8 fs-4">
          lorem ipsum dolor
        </p>
        <button class="btn btn-primary btn-lg" type="button">
          Browse me
        </button>
      </div>
    </div>



    <section class="posts my-5">

      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>

          </div>

        </div>
      </div>

    </section>


    <section class="newletter bg-secondary text-white py-4">
      <div class="container">
        <div class="col-6 mx-auto text-center">
          <h3>Newsletter</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet iste itaque earum labore, reiciendis consequuntur alias adipisci ipsum! Harum aliquam minima, ab quaerat tempora iure et fugit natus pariatur excepturi?
          </p>
        </div>

        <form action="" method="get" class="d-flex align-items-center justify-content-center">
          <div class="">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control rounded-0" name="email" id="email" aria-describedby="emailHelper" placeholder="" />
            <small id="emailHelper" class="form-text text-muted">Type your email address</small>
          </div>

          <button type="submit" class="btn btn-dark rounded-0">Subscribe</button>
        </form>

      </div>
    </section>


  </main>


  <footer class="py-4 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3>Company</h3>
          <ul class="list-unstyled">
            <li><a href="">Lorem.</a></li>
            <li><a href="">Animi.</a></li>
            <li><a href="">Corrupti!</a></li>
            <li><a href="">Cumque.</a></li>
          </ul>
        </div>
        <div class="col">
          <h3>Quick links</h3>
          <ul class="list-unstyled">
            <li><a href="">Lorem.</a></li>
            <li><a href="">Animi.</a></li>
            <li><a href="">Corrupti!</a></li>
            <li><a href="">Cumque.</a></li>
          </ul>
        </div>
        <div class="col">
          <h3>Legal</h3>
          <ul class="list-unstyled">
            <li><a href="">Lorem.</a></li>
            <li><a href="">Animi.</a></li>
            <li><a href="">Corrupti!</a></li>
            <li><a href="">Cumque.</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>