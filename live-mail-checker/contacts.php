<?php include_once __DIR__ . '/views/layouts/head.php'; ?>


<main>


  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Contact me</h1>
      <p class="col-md-8 fs-4">
        lorem ipsum dolor
      </p>
      <button class="btn btn-primary btn-lg" type="button">
        Browse me
      </button>
    </div>
  </div>

  <div class="container">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nemo aspernatur magnam cum neque possimus eveniet, quos accusantium dicta aut porro commodi.
    </p>


    <form action="" method="post" class="mb-3">

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper" placeholder="Mario rossi" />
        <small id="nameHelper" class="form-text text-muted">Type your name above</small>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelper" placeholder="Mario rossi" />
        <small id="emailHelper" class="form-text text-muted">Type your email above</small>
      </div>


      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
      </div>


      <button type="submit" class="btn btn-dark">Send</button>


    </form>



  </div>


</main>

<?php include_once __DIR__ . '/views/layouts/foot.php'; ?>