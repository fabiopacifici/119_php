<?php

//var_dump(__DIR__ . '/helpers/functions.php');
/* require_once __DIR__ . '/helpers/functions.php';

$email = $_GET['email'];

if (isset($email)) {

  $response = checkEmail($email);
  $message = generateAlertMessage($response);
} */


session_start();
//var_dump($_SESSION);

if (isset($_SESSION['message'])) {
  $message = $_SESSION['message'];
}

include_once __DIR__ . '/views/layouts/head.php';

?>



<main>
  <?php if (isset($message)) : ?>

    <div class="position-fixed alert-dismissible fade show alert alert-<?= $message['status']; ?>" role="alert" style="top: 70px; left: 2rem; z-index: 1">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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

      <form action="server.php" method="get" class="d-flex align-items-center justify-content-center">
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


<?php
include_once __DIR__ . '/views/layouts/foot.php';

?>